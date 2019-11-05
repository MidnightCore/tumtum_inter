<?php
include('config.php');
date_default_timezone_set('Asia/Bangkok');

if($_POST['nameContact'] != '' && $_POST['address'] != '' && $_POST['contactchannel'] != '' && $_POST['description'] != ''){
	$nameContact = $_POST['nameContact'];
	$address = $_POST['address'];
	$contactchannel = $_POST['contactchannel'];
	$description = $_POST['description'];
	$datetimeContact = date('Y-m-d H:i:s');

	$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO tbcontact (nameContact, address, contactchannel ,description, datetimeContact)
	VALUES (\"$nameContact\", \"$address\",\"$contactchannel\", \"$description\", \"$datetimeContact\")";

	$conn->query("SET NAMES utf8");	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	}
	$conn->close();

	header("location: ../contactus.php?suscess=1");
	die();
}else{
	header("location: ../contactus.php?suscess=0");
	die();
}
?>