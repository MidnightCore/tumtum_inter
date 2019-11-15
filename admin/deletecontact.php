<?php
include('../server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	?>
    <?php
$id =$_GET['id'];
$sql = "delete from tbcontact where id = '$id' ";
$query = mysqli_query($conn,$sql);
if($query)
{
	echo"ทำการลบข้อมูลแล้ว";
}
mysqli_close($conn);
?>
<tr>
       <td width="120"><a href="contactusall.php">ย้อนกลับ </a></td>
</tr>