<?php
			
				include('../dbcon.php');

				$id = $_REQUEST['sid'];
				
				$qry= "DELETE FROM `student` WHERE `id`='$id'";
				
				$run = mysqli_query($con,$qry);
				
				if($run == true)
				{
					?>
					<script>
						alert('Delete successfully.');
						window.open('admindash.php','_self');
					</script>
					<?php
					
				}
			
?>