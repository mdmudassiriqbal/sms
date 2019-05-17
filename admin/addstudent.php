<?php


       session_start();
			
			if(isset($_SESSION['uid']))
			{
				echo "";
			}
			else
			{
				header('location: ../login.php');
			}	
				
?>
<?php
	include('header.php');
	include('titlehead.php');
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">

	<table align="center" border="1">
		<tr>
			<th>Roll no.</th>
			<td><input type="text" name="rollno" placeholder="Enter Rollno" required> </td>
		</tr>
		<tr>
			<th>Full name</th>
			<td><input type="text" name="name" placeholder="enter name" required> </td>
		</tr>
		<tr>
			<th>city</th>
			<td><input type="text" name="city" placeholder="enter city" required> </td>
		</tr>
		<tr>
			<th>Parents contact number</th>
			<td><input type="text" name="pcon" placeholder="enter contact no of parents" required> </td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="number" name="std" placeholder="enter standard" required> </td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="simg" required> </td>
		</tr>
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit"> </td>
		</tr>
	</table>
	</form>
	</body>
	</html>
	
	
	<?php
			
			if(isset($_POST['submit']))
			{
				include('../dbcon.php');
				$rolno = $_POST['rollno'];
				$name = $_POST['name'];
				$city = $_POST['city'];
				$pcon = $_POST['pcon'];
				$std = $_POST['std'];
				$imagename = $_FILES['simg']['name'];
				$tempname =  $_FILES['simg']['tmp_name'];
				
				move_uploaded_file($tempname,"../dataimg/$imagename");
				
				$qry= "INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES (NULL, '$rolno', '$name', '$city', '$pcon', '$std', '$imagename')";
				
				$run = mysqli_query($con, $qry);

				if($run == true)
				{
	?>
					<script>     
						alert('successfully Inserted')
						window.open('admindash.php','_self');
					</script>
<?php
					
				}
			}
?>
			
			