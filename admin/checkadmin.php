<?ob_start();?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
	session_start();

	require_once("adminconnect.php");
	
	$strusername = mysqli_real_escape_string($con,$_POST['username']);
	$strpassword = mysqli_real_escape_string($con,$_POST['password']);

	$strSQL = "SELECT * FROM admintb WHERE username = '".$strusername."' 
	and password = '".$strpassword."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "username and password incorrect!";
		exit();
	}
	else
	{
		if($objResult["LoginStatusad"] == "1")
		{
			echo "'".$strusername."' you stayed login!";
			exit();
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE admintb SET LoginStatusad = '1' , LastUpdatead = NOW() WHERE AdminID = '".$objResult["AdminID"]."' ";
			$query = mysqli_query($con,$sql);

			//*** Session
			$_SESSION["AdminID"] = $objResult["AdminID"];
			session_write_close();

			//*** Go to Main page
			header("location: admindetail.php");
		}
			
	}
	mysqli_close($con);
?>