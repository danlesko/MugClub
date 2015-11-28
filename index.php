<?php
session_start();
?>

<html>

<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
<title>Mug Club Quick Search</title>
<!-- ============================================================== -->
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="description" content="The White Oak Tavern, Mug Club" />
<meta name="keywords" content="The White Oak Tavern, Mug Club" />
<!-- ============================================================== -->

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

  <!-- Custom styles for sign in -->
  <link href="css/signin.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="css/main.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="twotLogo.png" />
  
</head>

<body>

     <!--Sign In-->
    <div class="container">
      <div class="middleContainer">

      <form class="form-signin" action = "mugClubHome.php" method ="post">
        <h3 class="form-signin-heading">Search For Member</h3>
        <label for="inputFname" class="sr-only">First Name</label>
        <input type="text" name = "memberFname" class="form-control" placeholder="First Name"  autofocus>
        <label for="inputLname"  class="sr-only">Last Name</label>
        <input type="text" name = "memberLname" class="form-control" placeholder="Last Name"  autofocus>
        <button class="btn btn-lg btn-success btn-block" type="submit" >Search</button>
      </form>
    </div>
    </div> <!-- /container -->


<!-- Load javascript required for Bootstrap animation-->
<script src="https://code.jquery.com/jquery.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>