<?php
include 'config.php';
if(isset($_POST['btn_save']))
{
$fname=mysqli_real_escape_string($conn,$_POST['userid']);
$lname=$_POST['dateandtime'];
$email=$_POST['likeordislike'];
$address=$_POST['messegebysena'];
$sql="INSERT INTO `finaldecision`(`userid`, `dateandtime`, `likeordislike`, `messegebysena`) VALUES ('$fname','$lname','$email','$address')";
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($query)
{
	echo "Data Saved Successfully";
	
} else {
	echo "Failed to save data";
}
}
?>