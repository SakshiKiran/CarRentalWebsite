<?php
session_start();
include("connect.php");
$company = $model = $number = $frommm = $tooo = $hours = $price = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $company = $_POST["company"];
  $model = $_POST["model"];
  $number = $_POST["number"];
  $frommm = $_POST["frommm"];
  $tooo = $_POST["tooo"];
  $hours = $_POST["hours"];
  $price = $_POST["price"];
  $email = $_POST["email"];

  $sql = "INSERT INTO booking(company,model,number,frommm,tooo,hours,price,email) 
  VALUES('$company','$model','$number','$frommm','$tooo','$hours','$price','$email')";
  $result = mysqli_query($link,$sql);
  if($result == true){
    echo '<script>alert("Your booking has been done successfully!! Further details will be mailed to the email address given!! Please give us a feedback later!!");</script>';
    echo '<script>window.location=" usermain.php"</script>';

  }
  else{
    echo '<script>alert("something went wrong try again");</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
              <li><a href="bookr.php">Back</a></li>
              <li><a href="contact.php">Contact</a></li>
              
              
             
      </ul>
      </div>
        </div>
      </nav>
      <div class="col-lg-12 col-md-5 col-md-push-3">
    <h1 class="featurette-heading" style="font-size:250%">Fill in details to confirm your booking:</h1>
    

    <form class="form-horizontal" method="POST" style="border-style: outset;width: 50%; height: 150%; padding: 70px">
    <div class="form-group">
    <label for="" class="col-sm-2 control-label">Select the Company:</label>
    <div class="col-sm-5">
      <select class="form-control" id="" name="company" placeholder="Company" required>
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
    <label for="" class="col-sm-2 control-label">Select the model:</label>
    <div class="col-sm-5">
    <select class="form-control" id="" name="model" placeholder="Company" required>
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
    <select class="form-control" id="" name="number" placeholder="Number Plate Details" required>
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
    <label for="" class="col-sm-2 control-label">Departure:</label>
    <div class="col-sm-5">
    <textarea class="form-control" name="frommm" id="text" cols="40" rows="4"></textarea>
     
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Destination:</label>
    <div class="col-sm-5">
    <textarea class="form-control" name="tooo" id="text" cols="40" rows="4"></textarea>
      
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Duration:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="" name="hours" placeholder="Booking Hours" required>
      
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Price stated per hour:</label>
    <div class="col-sm-5">
    <select class="form-control" id="" name="price" placeholder="In INR" required>
  <option>100</option>
  <option>175</option>
  <option>200</option>
  <option>300</option>
  <option>600</option>
  

</select>
      
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
   
    </div>
  </div>


  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Go Ahead
          
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Book</button>
      
    </div>
</div>

</form>
</div>



</body></html>