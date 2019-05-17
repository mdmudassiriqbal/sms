<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> student management system </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>



<style type="text/css">
	body{
	text-align: left;
	background: linear-gradient(rgba(26, 26, 26, 0.5), rgba(26, 26, 26, 0.5)),url("image.jpg");
	background-size: cover;


	
	
	}
	.adminbutton{
		color: #31A6FF;
		font-family: "proxima nova";
		font-weight: 100;
		font-size: 20px;
	
		text-align: left;
		
		
	
	border: solid 2px #31A6FF;
	border-radius: 50px;
	
	padding: 3px 20px;
	}
	.adminbutton:hover{

		background-color: #31A6FF;
	color: #ffff;
	
	-webkit-transition-duration: 200ms;
	transition-duration: 200ms;
	}
	
	</style>
<body>

<h1 align="center" style="color:white; font-family: monospace; font-size: 50px">WELCOME TO THE STUDENT MANAGEMENT SYSTEM</h1>
<h3 align="right" style="margin-right: 30px; text-align:" ><a " href="login.php" class="adminbutton" style="text-decoration: none;">Admin login</a> </h3>


<form method="post" action="index.php">
<table border="0" style="width:30%; background-color:#ffff; border-radius: 5px;" align="center">
	<tr>
	<td colspan="2" align="center">Student information</td>
	</tr>
	<tr> 
	
	<td align="left" > Choose standard</td>
		<td> 
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
				<option value="8">8th</option>
				<option value="9">9th</option>
				<option value="10">10th</option>
				<option value="11">11th</option>
				<option value="12">12th</option>
				
		
		
		</td>
	</tr>
	<tr>
	<td align="left">Enter rollno</td>
	<td><input type="text" name="rollno"></td>
	</tr>
	 <tr>
	
	<td colsapan="2" align="center"><input type="submit" name="submit" value="show info"></td>
	
	</tr>

</table>
</form>

  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
<?php


  if(isset($_POST['submit']))
	{
		include('dbcon.php');
		include('showinfo.php');

		$standard = $_POST['std'];
		$rolno = $_POST['rollno'];

		showdetail($standard,$rolno);


	}

?>
