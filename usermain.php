
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/dashboard/">

    <title>Dashboard Template for Bootstrap</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="images/logo.png" width=5%>
      <ul class="nav navbar-nav">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">  Logout</span></a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="bookr.php">Book</a></li>
</ul>
</div>
  </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview<span class="sr-only">(current)</span></a></li><br>
            <li><a href="userinfo.php">User Information</a></li><br>
            <li><a href="profile.php">Profile</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="feedback.php">Feedback</a></li><br>
            
          
          </ul>
          <ul class="nav nav-sidebar">
          <li><a href="history.php">History</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Top Bookings</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/ford.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/hyundai.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
             
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/Toyota.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
             
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/vols.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
             
            </div>
          </div>

          <h2 class="sub-header">Our main offices are located in:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>States</th>
                  <th>City-1</th>
                  <th>City-2</th>
                  <th>City-3</th>
                  <th>City-4</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Karnataka</td>
                  <td>Bangalore</td>
                  <td>Mysore</td>
                  <td>Mangalore</td>
                  <td>Coorg</td>
                </tr>
                <tr>
                  <td>Delhi</td>
                  <td>Delhi</td>
                  <td>New delhi</td>
                  <td>--</td>
                  <td>--</td>
                </tr>
                <tr>
                  <td>Andhra Pradesh</td>
                  <td>Hyderabad</td>
                  <td>Amaravati</td>
                  <td>Eluru</td>
                  <td>kurnool</td>
                </tr>
                <tr>
                  <td>Telangana</td>
                  <td>Karimnagar</td>
                  <td>Nizamabad</td>
                  <td>Mahbunagar</td>
                  <td>Khammam</td>
                </tr>
                <tr>
                  <td>Kerala</td>
                  <td>Kollam</td>
                  <td>Kottyam</td>
                  <td>Kochi</td>
                  <td>Mattancheri</td>
                </tr>
                <tr>
                  <td>Tamil Nadu</td>
                  <td>Chennai</td>
                  <td>Kodaikanal</td>
                  <td>Coimbatore</td>
                  <td>kanchipuram</td>
                </tr>
                <tr>
                  <td>West Bengal</td>
                  <td>Kharagpur</td>
                  <td>Koch Bihar</td>
                  <td>Kolkata</td>
                  <td>Midnapur</td>
                </tr>
                <tr>
                  <td>Goa</td>
                  <td>Madgoan</td>
                  <td>Panaji</td>
                  <td>--</td>
                  <td>--</td>
                </tr>
                <tr>
                  <td>Orissa</td>
                  <td>Brahmapur</td>
                  <td>Udayagiri</td>
                  <td>konark</td>
                  <td>Puri</td>
                </tr>
                <tr>
                  <td>Maharashtra</td>
                  <td>Ahmadnagar</td>
                  <td>Chandrapur</td>
                  <td>Mumbai</td>
                  <td>Pune</td>
                </tr>
                <tr>
                  <td>Madhya Pradesh</td>
                  <td>Bhojpur</td>
                  <td>Datia</td>
                  <td>Bhopal</td>
                  <td>Indore</td>
                </tr>
                <tr>
                  <td>Gujarat</td>
                  <td>Ahamedbad</td>
                  <td>bhuj</td>
                  <td>Jamnagar</td>
                  <td>Kandla</td>
                </tr>
                <tr>
                  <td>Punjab</td>
                  <td>Amritsar</td>
                  <td>Chandigarh</td>
                  <td>Firozpur</td>
                  <td>Patiala</td>
                </tr>
                <tr>
                  <td>Chhattisigarh</td>
                  <td>Durg</td>
                  <td>Raipur</td>
                  <td>Dhamtari</td>
                  <td>Rajnandgaon</td>
                </tr>
                <tr>
                  <td>Rajasthan</td>
                  <td>Bharatpur</td>
                  <td>Dhaulpur</td>
                  <td>Jaipur</td>
                  <td>Kota</td>
                </tr>
                <tr>
                  <td>Bihar</td>
                  <td>Bodh Gaya</td>
                  <td>Chapra</td>
                  <td>Hajipur</td>
                  <td>Jamalpur</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
