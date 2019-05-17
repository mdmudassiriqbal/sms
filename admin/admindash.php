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
?>

	<div class="admintitle" align="center">
	<h4><a href="../logout.php" style="float:right; margin-right:40px; color:#fff;">Logout</a></h4>
		<h1> WELCOME TO ADMIN DASHBOARD</h1>

	</div>
		
	<div class="dashboard">
	
		<table border="1" align="center" width="30%">
		
			<tr>
				<td>1.</td><td align="center"><a href="addstudent.php" style="text-decoration: inherit; ">Insert student Detail</a></td>
			</tr>
			<tr>
				<td>2.</td><td align="center"><a href="updatestudent.php" style="text-decoration: inherit;" >update student Detail</a></td>
			</tr>
			<tr>
				<td>3.</td><td align="center"><a href="deletestudent.php" style="text-decoration: inherit;">delete student Detail</a></td>
			</tr>
		
		</table>
		
	
	</div>
</body>
</html>