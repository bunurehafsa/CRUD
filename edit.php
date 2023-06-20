<?php
	include "dbconnect.php";
	
	$id=$_GET['edit_id'];
	
	$nam=$_POST['f_name'];
	$deg=$_POST['f_designation'];
	$phn=$_POST['f_phone'];
	$dob=$_POST['f_dob'];
	
	$sql="UPDATE teacher SET name='$nam', designation='$deg' ,
	phone='$phn',date_of_birth='$dob' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>