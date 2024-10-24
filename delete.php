<?php


	// < ------------------- inclue connection file where is the code of database connectivity------------------->
 	include 'conn.php';

// < ------------------- Get the id throught the url and save into $id variable ------------------->
$id =	$_GET['id'];
// < ------------------- This is sql query to delete record form database ------------------->
$sql = "DELETE FROM data WHERE id = '$id' ";
$result = mysqli_query($conn,$sql) or die("Query failed");
if($result){
	header("location: display.php");
}else{
	echo "Data can't deleted";
}
?>
