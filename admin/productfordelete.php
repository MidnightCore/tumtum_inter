<?php
session_start();
require_once("adminconnect.php");
if (!isset($_SESSION['AdminID'])) {
	echo "Please Login!";
	exit();
}

//*** Update Last Stay in Login System
$sql = "UPDATE admintb SET LastUpdatead = NOW() WHERE AdminID = '" . $_SESSION["AdminID"] . "' ";
$query = mysqli_query($con, $sql);
mysqli_set_charset($con, "utf8");

//*** Get User Login
$strSQL = "SELECT * FROM admintb WHERE AdminID = '" . $_SESSION['AdminID'] . "' ";
$objQuery = mysqli_query($con, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);


include('../server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Product for Delete</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
	<style>
		body {
			background-image: url("../images/chili.jpg");
			background-size: initial;
			width: 100vw;
			height: 100vh;
			font-family: 'Itim', cursive;
		}
	</style>
</head>

<body>
	<div class="container"><br>
		<table class="table table-dark table-striped" align="center" width="600" border="1">
			<tr>
				<td height="35" align="center"><a href="admindetail2.php">กลับสู่หน้าหลัก</a></td>
			</tr>
			<tr>

				<td width="150" align="center"> รายการสินค้า</td>
				<td width="150" align="center"> ราคา</td>
				<td width="150" align="center"> ลบรายการสินค้า</td>
			</tr>

			<?php
			$sql = "SELECT picproduct, thname, price FROM tbproduct ORDER BY productID ASC";
			$conn->query("SET NAMES utf8");
			mysqli_set_charset($conn, "utf8");
			$sql = "SELECT * FROM tbproduct";
			$query = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($query)) {
				?>

				<tr>

					<td width="150" align="center"><?php echo $row["thname"]; ?></td>
					<td width="150" align="center"><?php echo $row["price"]; ?></td>
					<td width="150" align="center"><a href="deleteproduct.php?productID=<?php echo $row["productID"]; ?>">ลบข้อมูล</a></td>
				</tr>

			<?php
			}
			mysqli_close($conn);
			?>

		</table>
		<div class="text mt-4" style="text-align:right">
			<a class="btn btn-light" href="admindetail2.php">กลับหน้าหลัก</a>
		</div><br>
	</div>
</body>

</html>