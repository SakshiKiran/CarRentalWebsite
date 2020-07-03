<?php
include ("connect.php");
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location:usermain.php");
    exit;
}
$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $email = $_POST["email"];
    $_SESSION["email"]=$email;
    $password = $_POST["password"];
    
    $sql = "select email,password from user where email='$email' ";
    $result = mysqli_query($link,$sql);
    $res = mysqli_fetch_array($result);
    $hash = $res['password'];
    if(mysqli_num_rows($result)>0){
        
        if(password_verify($password,$hash)){
        session_start();
        $_SESSION["loggedin"]=true;
        $_SESSION["email"] = $email;
        header("location: usermain.php");
        }
    }
    else{
      echo '<script>alert("Username or Password incorrect");</script>';
    echo '<script>window.location="user-login.php"</script>';
        $error="Usernaame or password is incorrect.";
    }
    
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
        <li><a href="User-signup.php">Register</a></li>
</ul>
</div>
  </div>
</nav>
<div class="col-lg-12 col-md-5 col-md-push-3">
<div class="container">

<h1 class="featurette-heading" style="font-size:250%"> Enter the following information to continue:</h1>
<form class="form-horizontal" method="POST" style="border-style: outset;width: 50%; height: 70%; padding: 70px">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="" name="password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</p>

</body>
</html>