<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
print_r($_POST);
// echo "</pre>";
// exit();
if($_SESSION['staff_level']!='staff'){
	Header("Location: index.php");
}
	$staff_id = mysqli_real_escape_string($con,$_POST["staff_id"]);
	$staff_user = mysqli_real_escape_string($con,$_POST["staff_user"]);
	$staff_pass = mysqli_real_escape_string($con,$_POST["staff_pass"]);
	$staff_name = mysqli_real_escape_string($con,$_POST["staff_name"]);
	$staff_tel = mysqli_real_escape_string($con,$_POST["staff_tel"]);
    $staff_email = mysqli_real_escape_string($con,$_POST["staff_email"]);
    $staff_level = mysqli_real_escape_string($con,$_POST["staff_level"]);
	$sql = "UPDATE tbstaff SET 
	staff_user='$staff_user',
	staff_pass='$staff_pass',
	staff_name='$staff_name',
	staff_tel='$staff_tel',
    staff_email='$staff_email',
    staff_level='$staff_level'
	WHERE staff_id=$staff_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='staff.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='staff.php?act=add&do=f';";
    echo '</script>';
}
?>