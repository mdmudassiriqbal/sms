<?php

session_start();
	if(isset($_SESSION['uid']))
	{
		header('location: admin/admindash.php');
	}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Login admin</title>
</head>
<body>
	
<a href="index.php" style="float:left; margin-left:50px; color:black; text-decoration: none;"><b>back</b></a>
<h1 align="center" style="font-family:sans-serif;">Admin login here</h1>

<form action="login.php" method="post">

<table align="center">

 <tr>

	<td>username</td>
	<td><input type="text" name="uname" required></td>
</tr>
<tr>
		<td>password</td>
		<td><input type="password" name="pass" required></td>


</tr>

<tr>
	<td colspan="1" align="center"><input type="submit" name="login" value="login"></td>

</tr>
</table>

</form>

</body>

</html>
<?php

include ('dbcon.php');

if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		
		$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
		$run = mysqli_query($con,$qry);
		$row = mysqli_num_rows($run);
		
		if($row <1)
		{
			?>
			<script> 
				alert('username or password not exist');
				window.open('login.php','_self');
			</script>
			<?php
		}
		
		else
		{
			$data = mysqli_fetch_assoc($run);
			$id = $data['id'];
			
			
			
			$_SESSION['uid'] = $id;
			header('location:admin/admindash.php');
			
			
			
			
		}
		
	}


?>
