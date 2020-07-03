<?php
session_start();
?>

<?php



include("connect.php");
//function test_input($data) {
 // $data = trim($data);
 // $data = stripslashes($data);
 // $data = htmlspecialchars($data);
 // return $data;
//}

$mail1 = $_SESSION["email"];
// define variables and set to empty values
//$param_name = $nameErr = $ageErr = $genderErr = $emailErr = $phoneErr = $stateErr = $cityErr = $pincodeErr =$dlErr = $decErr = "";
$name = $age = $gender = $email = $phone = $state = $city = $pincode = $drivinglicence = "" ;//$dec = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $drivinglicence = $_POST["drivinglicence"];
   



// //if(empty($nameErr) && empty($ageErr) && empty($genderErr) && empty($emailErr) && empty($phoneErr) && empty($stateErr) && empty($cityErr) && empty($pincodeErr) && empty($drivinglicence) && empty($decErr))
//             //{
//               $sql = "INSERT INTO details(name,age,gender,email,phone,state,city,pincode,drivinglicence) VALUES(?,?,?,?,?,?,?,?,?)";
//               if($stmt = mysqli_prepare($link, $sql)){
             

// mysqli_stmt_bind_param($stmt, "sississis", $param_name, $param_age, $param_gender, $param_email, $param_phone, $param_state, $param_city, $param_pincode, $param_drivinglscence);
          
//           // Set parameters
//                   $param_name = $name;
//                   $param_age = $age;
//                   $param_gender = $gender;
//                   $param_email = $email;
//                   $param_phone = $phone;
//                   $param_state = $state;
//                   $param_city = $city;
//                   $param_pincode = $pincode;
//                   $param_drivinglicence = $drivinglicence;
                  
        
          // Attempt to execute the prepared statement

          $sql = "INSERT INTO details(name,age,gender,email,phone,state,city,pincode,drivinglicence)
           VALUES('$name','$age','$gender','$email','$phone','$state','$city','$pincode','$drivinglicence')";
           $result = mysqli_query($link,$sql);
                  if($result == true){
                  // Redirect to login page
                  echo '<script>alert("Information entered succefully!!");</script>';
                  echo '<script>window.location=" usermain.php"</script>';
                      
                  }
                  else{
                    echo '<script>alert("Someting went wrong!!");</script>';
                       }   
                      }

     


?>

<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userinfo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<title>User information</title>
<style>
  
.error {color: #FF0000;}
</style>
</head>
<body>  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="images/logo.png" width=5%>
      <ul class="nav navbar-nav">
        <li><a href="usermain.php">Back</a></li>
        
</div>
  </div>
</nav>

<div class="col-lg-12 col-md-5 col-md-push-3">
    <h1 class="featurette-heading" style="font-size:250%">Please fill in your details:</h1> 

    <form class="form-horizontal" method="POST" style="border-style: outset;width: 50%; height: 70%; padding: 70px">
    <div class="form-group">
    <label for="" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="name" placeholder="Name" required>
      
    </div>
  </div>
  
  
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Age:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="age" placeholder="Age" required>
      
    </div>
  </div>
  
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Gender:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="gender" placeholder="Gender" required>
      
    </div>
  </div>
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
      
    </div>
  </div>
  
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Phone:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="phone" placeholder="phone" required>
      
    </div>
  </div>
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">State:</label>
    <div class="col-sm-5">
    <select class="form-control" id="" name="state" placeholder="State" required>
  <option>Karnataka</option>
  <option>Delhi</option>
  <option>Andhra Pradesh</option>
  <option>Telangana</option>
  <option>Kerala</option>
  <option>Tamil Nadu</option>
  <option>WestBengal</option>
  <option>Goa</option>
  <option>Orissa</option>
  <option>Maharashtra</option>
  <option>Madhya Pradesh</option>
  <option>Gujarat</option>
  <option>Punjab</option>
  <option>Chhattisigarh</option>
  <option>Rajasthan</option>
  <option>Bihar</option>
  

</select>
    </div>
  </div>
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">City:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="city" placeholder="City" required>
      
    </div>
  </div>
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Pincode:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="pincode" placeholder="Pincode" required>
      
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Driving Licence:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="drivinglicence" placeholder="DL Number" required>
      
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="det" value="yes"> All the information entered are correct to the most of my knowledge 
          
        </label>
      </div>
    </div>

  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Upload Information</button>
      
    </div>
</div>


</form>
</div>




<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>


</body>
</html>

