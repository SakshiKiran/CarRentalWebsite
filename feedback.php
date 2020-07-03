<?php
session_start();
?>

<?php

include("connect.php");
// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }


// define variables and set to empty values
//$param_name = $email1Err = $company1Err = $model1Err = $number1Err = $durationErr = $condition1 = $ride = $suggestion = $next = "";
$email1 = $company1 = $model1 = $number1 = $duration = $condition1 = $ride = $suggestion = $next = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email1 = $_POST["email1"];
  $company1 = $_POST["company1"];
  $model1 = $_POST["model1"];
  $number1 = $_POST["number1"];
  $duration = $_POST["duration"];
  $condition1 = $_POST["condition1"];
  $ride = $_POST["ride"];
  $suggestion= $_POST["suggestion"];
  $next= $_POST["next"];
 
//   if (empty($_POST["email1"])) {
    
    
//     // check if name only contains letters and whitespace
//     if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
//       $email1Err = "Invalid email format";
//     }
//   }
  
//   if (empty($_POST["company1"])) {
//     $company1Err = "Company is required";
//   } else {
    
//     // check if e-mail address is well-formed
    

   
//   if (empty($_POST["model1"])) {
//     $model1Err = "Model number is required";
//   } else {
    
//     // check if contact number is well-formed
    
//   }

//   if (empty($_POST["number1"])) {
//     $number1Err = "Number plate details is required";
//   } else {
    
//   }

//   if (empty($_POST["duration"])) {
//     $durationErr = "Please enter the duration";
//   } else {
   
//   }

//   if (empty($_POST["condition1"])) {
//    $condition1Err = "Please Rate";
//   } else {
//   
//   }


//   if (empty($_POST["ride"])) {
//     $rideErr = "Please Rate";
//   } else {
   
//  }

//  if (empty($_POST["suggestion"])) {
//   $suggestionErr = "Please enter feedback";
// } else {
  
// }

//   if (empty($_POST["next"])) {
//     $nextErr = "Please Rate";
//   } else {
    
//   }
  
  
  
  
  



//if(empty($email1Err) && empty($company1Er) && empty($model1Err) && empty($number1Err) && empty($durationErr) && empty($condition1) && empty($ride) && empty($suggestion) && empty($next) )
            
                $sql = "INSERT INTO feedback(email1,company1,model1,number1,duration,condition1,ride,suggestion,next) 
                VALUES('$email1','$company1','$model1','$number1','$duration','$condition1','$ride','$suggestion','$next')";
                $result = mysqli_query($link,$sql);
             //{
            // Bind variables to the prepared statement as parameters
                    //mysqli_stmt_bind_param($stmt, "sssssssss", $param_email1,$param_company1,$param_model1,$param_number1,$param_duration,$param_codition1,$param_ride,$param_suggestion,$param_next);
            
            // Set parameters
            // $param_email1 = $email1;
            // $param_company1 = $company1;
            // $param_model1 = $model1;
            // $param_number1 = $number1;
            // $param_duration = $duration;
            // $param_codition1 = $condition1;
            // $param_ride = $ride;
            // $param_suggestion = $suggestion;
            // $param_next = $next;
                    
            
            // Attempt to execute the prepared statement
                    if($result == true){
                    // Redirect to login page
                    echo '<script>alert("Uploaded successfully!! Thank you for your valuable feedback... ");</script>';
                    echo '<script>window.location=" usermain.php"</script>';
                    }
                    else{
                        echo "Something went wrong. Please try again later.";
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
              <li><a href="usermain.php">Back</a></li>
              <li><a href="contact.php">Contact</a></li>
              
              
             
      </ul>
      </div>
        </div>
      </nav>
      <div class="col-lg-12 col-md-5 col-md-push-3">
    <h1 class="featurette-heading" style="font-size:250%">Feedback form</h1>
    

    <form class="form-horizontal" method="POST" style="border-style: outset;width: 50%; height: 150%; padding: 70px">
    
    <div class="form-group">
    <label for="" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="" name="email1" placeholder="Email ID" required>
      
    </div>
  </div>
    <div class="form-group">
    <label for="" class="col-sm-2 control-label">Company:</label>
    <div class="col-sm-5">
    <select class="form-control" id="" name="company1" placeholder="Company" required>
  <option>Nissan</option>
  <option>BMW</option>
  <option>Maruthi Suzuki</option>
  <option>Toyota</option>
  <option>Ford Mahindra</option>
  <option>Ford</option>
  <option>Kia</option>
  <option>Volswagen</option>
  <option>Hyundai</option>
  <option>Electric car</option>
  <option>Electric Car2</option>
  

</select>
      
    </div>
  </div>
  
  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Model:</label>
    <div class="col-sm-5">
    <select class="form-control" id="" name="model1" placeholder="Company" required>
  <option>Nissan Sunny</option>
  <option>BMW 3 Series</option>
  <option>Maruthi Suzuki Ciaz</option>
  <option>Toyota Innova crysta</option>
  <option>Ford Mahindra jV</option>
  <option>Ford Ecosport</option>
  <option>Maruti Suzuki XL6</option>
  <option>Kia Carnival</option>
  <option>Volswagen vento</option>
  <option>Hyundai Aura</option>
  <option>Volswagen Polo</option>
  <option>Hyundai Elite</option>
  <option>Electric car</option>
  <option>Electric Car2</option>
  <option>Maruti 800</option>
  <option>Maruti Alto 800</option>
  

</select>
      
    </div>
  </div>
  
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Number Plate:</label>
    <div class="col-sm-5">
    <select class="form-control" id="" name="number1" placeholder="Number Plate Details" required>
  <option>KA-09-M-832</option>
  <option>KL-02-A-7603</option>
  <option>TN-06-C-890</option>
  <option>KA-15-NM-4092</option>
  <option>KA-06-F-095</option>
  <option>AP-12-K-1080</option>
  <option>PJ-55-M-8090</option>
  <option>MP-09-O-52</option>
  <option>KA-08-J-302</option>
  <option>MH-03-T-9020</option>
  <option>GA-08-M-749</option>
  <option>RJ-7-J-6123</option>
  <option>KA-09-P-430</option>
  <option>KL-59-W-609</option>
  <option>KA-08-E-4097</option>
  <option>MP-03-Y-7890</option>
  

</select>
      
    </div>
  </div>
  

  

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Duration:</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="" name="duration" placeholder="Booking Hours" required>
     
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Condition of the Car:</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="" name="condition1" placeholder="Rate from 1-10" required>
      
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Driving Experience:</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="" name="ride" placeholder="Rate from 1-10" required>
     
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Any Suggestion?:</label>
    <div class="col-sm-5">
    <textarea class="form-control" name="description" id="text" cols="40" rows="4"></textarea>
    
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Would you book the car again?:</label>
    <div class="col-sm-5">
  <select class="form-control" id="" name="next" placeholder="Yes/No">
  <option>Yes</option>
  <option>No</option>
  </select>
  </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
      
    </div>
</div>

</form>
</div>


</body></html>




<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>


</body>
</html>