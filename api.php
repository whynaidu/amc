<?php
include_once 'connectivity.php';
if(isset($_POST['save']))
{	 
	 $complaint_type = $_POST['complaint_type'];
	 $complaint_discription = $_POST['complaint_discription'];
	 $contact_name = $_POST['contact_name'];
	 $contact_number = $_POST['contact_number'];
	 $sql = "INSERT INTO complaints (date, time, complaint_type, description, contact_name, contact_no, status)
	 VALUES (NOW(),NOW(),'$complaint_type','$complaint_discription','$contact_name','$contact_number', 'open')";
	 if (mysqli_query($conn, $sql)) {
		header("location:complaint.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


$selectquery="select * from complaints";
$result = mysqli_query($conn,$selectquery);

?>