<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron/">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
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
        
</div>
  </div>
</nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->

    
      
    <div class="jumbotron">
      <div class="container">
        
        <h2 style="text-align;"><span style="color:black;">Your Details: </span><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1>
        <p><span style="color:black;">The following is the details you have uploaded:</span></p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
        <div class="col-md-4">
        <?php
        session_start();

include("connect.php");


$email2 = $_SESSION["email"];
$sql = "SELECT * FROM details where email = '$email2'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. "<br>". " Name: " . $row["name"]. "<br> " . "Age: ". $row["age"]. "<br>" ."Email: ". $row["email"]. "<br>  "."Phone: ". $row["phone"]. "<br>  "."State: ". $row["state"]. "<br>  "."City: ". $row["city"]. "<br>   "."Pincode: ". $row["pincode"]. "<br>   "."DL No.: ". $row["drivinglicence"]. "<br><br>";
  }
} else {
  echo "0 results";
}