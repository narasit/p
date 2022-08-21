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
	$ins_id = mysqli_real_escape_string($con,$_POST["ins_id"]);
	$ins_name = mysqli_real_escape_string($con,$_POST["ins_name"]);
	$sql = "UPDATE tbintitution SET 
	ins_name='$ins_name'
	WHERE ins_id=$ins_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='ins.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='ins.php?act=add&do=f';";
    echo '</script>';
}
?>