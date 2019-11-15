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
  <title>Admin Detail Page</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    body {
      background-image: url("../images/chili.jpg");
      background-size: cover;
      width: 100vw;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <table class="table" width="750" border="1" cellspacing="0" cellpadding="0">
      <tr class="table-dark text-dark">
        <td colspan="5" align="center">หน้าควบคุมหลัก</td>
      </tr>
      <tr class="table-dark text-dark">
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
  </div>
</body>

</html>