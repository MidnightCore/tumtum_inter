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
mysqli_set_charset($con, "utf8");
?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>admindetail</title>
</head>

<body>
  <table width="750" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5" align="center">หน้าควบคุมหลัก</td>
    </tr>
    <tr>
      <td width="174">&nbsp;</td>
      <td width="136">&nbsp;</td>
      <td width="142">&nbsp;</td>
      
      <td width="167"><a href="logoutadmin.php">ออกจากระบบ</a></td>
    </tr>
    <tr>
      <td height="57"><a href="contactusall.php">ดูรายการติดต่อสอบถาม</a></td>
      <td><a href="productall.php">ดูรายการสินค้ารวม</a></td>
      <td><a href="insertproduct.php">เพิ่มรายการสินค้า</a></td>
      
      <td><a href="productfordelete.php">ลบรายการสินค้า</a></td>
    </tr>
  </table>
  <?php
  mysqli_close($con);
  ?>

</body>

</html>