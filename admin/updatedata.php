<?php
			
			if(isset($_POST['submit']))
			{
				include('../dbcon.php');
				$rolno = $_POST['rollno'];
				$name = $_POST['name'];
				$id = $_POST['sid'];
				$city = $_POST['city'];
				$pcon = $_POST['pcon'];
				$std = $_POST['std'];
				$imagename = $_FILES['simg']['name'];
				$tempname =  $_FILES['simg']['tmp_name'];
				
				move_uploaded_file($tempname,"../dataimg/$imagename");
				
				$qry= "UPDATE `student` SET `rollno` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `image` = '$imagename' WHERE `student`.`id` = $id;";
				
				$run = mysqli_query($con,$qry);
				
				if($run == true)
				{
					?>
					<script>
						alert('update successfully.');
						window.open('updateform.php?sid=<?php echo $id; ?>','_self');
					</script>
					<?php
					
				}
			}
			?>