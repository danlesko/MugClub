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
<meta name="description" content="UMBC Advising" />
<meta name="keywords" content="UMBC, Advising" />
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

	<?php
		echo("<div class='container'>");
		echo("<div class='middleContainer'>");
		
		$debug = false;
		include('CommonMethods.php');
		$COMMON = new Common($debug); // common methods

		$memberFname = ($_POST['memberFname']);
		$memberLname = ($_POST['memberLname']);

		$sqlMugCount = "SELECT COUNT(*) FROM `mugclub` WHERE `lname` = '$memberLname' AND `fname` = '$memberFname'";
		$sendMugCount = $COMMON->executeQuery($sqlMugCount,$_SERVER["SCRIPT_NAME"]);
		$fetchMugCount = mysql_fetch_row($sendMugCount);

		$sqlMugNum = "SELECT * FROM `mugclub` WHERE `lname` = '$memberLname' AND `fname` = '$memberFname'";
		$sendMugNum = $COMMON->executeQuery($sqlMugNum,$_SERVER["SCRIPT_NAME"]);
		

		$numEntries = $fetchMugCount[0];
		//var_dump($fetchMugCount);
		if($numEntries > 1){
			echo("There is more than one person named $memberFname $memberLname. <br>");
			echo("Possible mug club numbers are: <br>");
			while($possibleMembers = mysql_fetch_row($sendMugNum)){
				echo("<h3>$possibleMembers[1] $possibleMembers[0] : $possibleMembers[2]</h3><br>");
			}
		}
		else{
			$fetchMugNum = mysql_fetch_row($sendMugNum);
			echo("<p>The mug club number for $memberFname $memberLname is:<br>");
			echo("<h1>$fetchMugNum[2]</h1></p>");
		}
	?>

    

      <form class="form-signin" action = "mugClubHome.php" method ="post">
        <h2 class="form-signin-heading">Search For Another Name?</h2>
        <label for="inputFname" class="sr-only">First Name</label>
        <input type="text" name = "memberFname" class="form-control" placeholder="First Name"  autofocus>
        <label for="inputLname"  class="sr-only">Last Name</label>
        <input type="text" name = "memberLname" class="form-control" placeholder="Last Name"  autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Search</button>
      </form>

    </div>
	</div>

</body>
</html>