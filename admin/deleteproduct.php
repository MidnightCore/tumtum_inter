<?php
include('../server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	?>
    <?php
$productID =$_GET['productID'];
$sql = "delete from tbproduct where productID = '$productID' ";
$query = mysqli_query($conn,$sql);
if($query)
{
	echo"ทำการลบข้อมูลแล้ว";
}
mysqli_close($conn);
?>
<tr>
       <td width="120"><a href="admindetail.php">กลับสู่หน้าหลัก </a></td>
</tr>