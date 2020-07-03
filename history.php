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
        
        <h2 style="text-align;"><span style="color:black;">Booking History: </h1>
        <p><span style="color:black;">These are the cars you've booked so far:</span></p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
        <div class="col-md-4">
        <?php
         session_start();
include("connect.php");


$mail2 = $_SESSION["email"];
$sql = "SELECT * FROM booking where email = '$mail2' ";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id ->  " . $row["id"]. "<br>". " Company ->   " . $row["company"]. "<br> " . "Model ->  ". $row["model"]. "<br>" ."Number Plate Details ->  ". $row["number"]. "<br>  "."Departure Location ->  ". $row["frommm"]. "<br>  "."Destination ->  ". $row["tooo"]. "<br>  "."Duration of Travel ->   In Hours-- ". $row["hours"]. "<br>   "."Price per hour -> INR  ". $row["price"]. "<br>" . "Email ->   " . $row["email"]. "<br>";
    echo "Total amount paid: INR " . number_format($row["hours"] * $row["price"], 2). "<br><br><br>"; 
  }
} else {
  echo "No Bookings Yet!!";
}