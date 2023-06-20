
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$designation=$_POST['f_designation'];
$phone=$_POST['f_phone'];
$date_of_birth=$_POST['f_dob'];

$sql = "INSERT INTO teacher (id, name,designation,phone,date_of_birth) 
		VALUES (NULL, '$name', '$designation', '$phone','$date_of_birth')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

