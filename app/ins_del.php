<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
if($_SESSION['staff_level']!='staff'){
	Header("Location: index.php");
}
	$ID  = mysqli_real_escape_string($con,$_GET["ID"]);
	$sql = "DELETE FROM tbintitution WHERE ins_id=$ID";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));	
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "window.location = 'ins.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'ins.php'; ";
	echo "</script>";
}
?>