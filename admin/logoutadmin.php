

<?php
    ob_start();
	session_start();

	require_once("adminconnect.php");

	//*** Update Status
	$sql = "UPDATE admintb SET LoginStatusad = '0', LastUpdatead = '0000-00-00 00:00:00' WHERE AdminID = '".$_SESSION["AdminID"]."' ";
	$query = mysqli_query($conn,$sql);

	session_destroy();
	header("location:../index.php");
?>