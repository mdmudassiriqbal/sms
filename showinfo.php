<?php
function showdetail($standard,$rolno)
 {

 	include('dbcon.php');

 	$sql = "SELECT * FROM `student` WHERE `rollno`='$rolno' AND `standard`='$standard'";
 	$run = mysqli_query($con,$sql);

 	if(mysqli_num_rows($run)>0)
 	{

 		$data = mysqli_fetch_assoc($run);
 		?>
 		<table border="1" style="width: 50%; margin-top: 30px; background-color: #e3e3e3; " align="center">
 			<tr>
 				<th colspan="3"> Student Details </th>
 			</tr>
 			<tr>
 				<td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>" style="max-width: 150px; max-height: 120px" > </td>
 			</tr>
 			<tr>
 				<th>Roll No</th> 
 				<td><?php echo $data['rollno']; ?></td>
 			</tr>
 			<tr>
 				<th> Name </th>
 				<td><?php echo $data['name']; ?></td> 
 			</tr>
 			<tr>
 				<th> Parents Contact No </th>
 				<td><?php echo $data['pcont']; ?></td> 
 			</tr>
 			<tr>
 				<th> City </th>
 				<td><?php echo $data['city']; ?></td> 
 			</tr>
 		</table>

 		<?php

 	}

 	else
 	{

 		echo "<script> alert('No Student Found'); </script>";
 	}
 }

?>