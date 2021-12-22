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
  <title>Insert Product</title>
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
    <form action="addproduct.php" method="post" enctype="multipart/form-data">
      <table class="table table-dark table-striped" width="800" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="244" align="center" valign="middle">ข้อมูลสินค้า</td>
          <td width="550" align="center" valign="middle">กรอกรายละเอียด</td>
        </tr>
        <tr>
          <td>รหัสสินค้า</td>
          <td><label for="productID"></label>
            <input name="productID" type="text" id="productID" size="10" maxlength="10">
          </td>
        </tr>
        <tr>
          <td>รายการสินค้า</td>
          <td><label for="thname"></label>
            <textarea name="thname" cols="25" rows="2" id="thname"></textarea>
          </td>
        </tr>
        <tr>
          <td>ราคา</td>
          <td><label for="price"></label>
            <input name="price" type="text" id="price" size="20" maxlength="20">
          </td>
        </tr>
        <tr>
          <td>ประเภทสินค้า</td>
          <td><label for="typeproduct"></label>
            <select name="typeproduct" id="typeproduct">
              <option value="tum">ส้มตำ</option>
              <option value="tom">ต้ม</option>
              <option value="larm">ลาบน้ำตก</option>
              <option value="yarm">ยำ</option>
              <option value="fires">ของทอดและอื่นๆ</option>
              <option value="drink">เครื่องดื่ม</option>

            </select>
          </td>
        </tr>
        <tr>
          <td>รูปภาพ</td>
          <td><label for="picproduct"></label>
            <input name="picproduct" type="file" id="picproduct" size="20" maxlength="20">
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="adddata" id="adddata" value=" เพิ่มข้อมูล">
            <input type="reset" name="clear" id="clear" value="ล้างข้อมูล">
          </td>
        </tr>
      </table>
    </form>

    <?
    mysqli_close($conn);
    ?>
    <div>
      <div class="text mt-4" style="text-align:right">
        <a class="btn btn-light" href="admindetail2.php">กลับหน้าหลัก</a>
      </div>
    </div>
</body>

</html>