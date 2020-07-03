<?php

include("connect.php");

$name = $email = $password = $con_pass="";
$emai_err= $password_err= $con_pass_err="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 //taking the input from the post req   
$name = $_POST["name"];
$email = $_POST["email"];

//checking if email field ids checked
   if(isset($_POST["email"])){
         $sql ="SELECT ID FROM `user` WHERE email='$email'";//query to check if email exits
        $result = mysqli_query($link,$sql);
        if(mysqli_num_rows($result)>0){ //
            $emai_err = "Email already exist";
        }
        else{ 
            // if does not exit 
            if(strlen(trim($_POST["password"]))<6){ //checking wheatrher password is 
                $password_err = "Password must have atleast 6 charecters.";
            }
            else{
                $password = $_POST["password"];
            }
            
            $con_pass = $_POST["con_pass"];
            if($password != $con_pass){ // checking password matches or not
                $con_pass_err = "Password did not match";
            }
       
    
            if(empty($emai_err) && empty($password_err) && empty($con_pass_err))
            {
                $sql = "INSERT INTO user(name,email,password) VALUES(?,?,?)";
                if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "sss", $param_name,$param_email, $param_password);
            
            // Set parameters
                    $param_name = $name;
                    $param_email = $email;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    echo '<script>alert("Registered successfully!!! Press OK to go to login page...");</script>';
    echo '<script>window.location=" user-login.php"</script>';

                    }
                    else{
                        echo "Something went wrong. Please try again later.";
                         }   

                } 
            }       
        }
    }
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="images/logo.png" width=5%>
            <ul class="nav navbar-nav">
              <li><a href="home.php">WOOOOOM</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="User-login.php">Login</a></li>
              
             
      </ul>
      </div>
        </div>
      </nav>
      <div class="col-lg-12 col-md-5 col-md-push-3">
    <h1 class="featurette-heading" style="font-size:250%">Welcome to WOOOOOM!</h1>
    <p style="color: Blue; font-size: 100%">Fill in all the following details to continue: 

    <form class="form-horizontal" method="POST" style="border-style: outset;width: 50%; height: 70%; padding: 70px">
    <div class="form-group">
    <label for="" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="name" placeholder="Username" required>
    </div>
  </div>
  
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
    </div>
  </div>
  <span><?php echo $emai_err; ?></span>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="" name="password" placeholder="Password" required>
    </div>
  </div>
  <span><?php echo $password_err; ?></span>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="" name="con_pass" placeholder="Password" required>
    </div>
  </div>
  <span><?php echo $con_pass_err;?></span>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Recheck the email 
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Register</button>
      
    </div>
</div>

</form>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>

    
</body>
</html>

