<?php
include('../server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
$productID   = $_POST['productID'];
$thname      = $_POST['thname'];
$price          = $_POST['price'];
$typeproduct = $_POST['typeproduct'];
$picproduct   = $_FILES['picproduct']['name'];
$imagespath  = $_FILES['picproduct']['tmp_name'];

mysqli_set_charset($conn, "utf8");

$sql = "insert into tbproduct(productID, thname, price, typeproduct, picproduct)
values('$productID','$thname','$price','$typeproduct','$picproduct')";

$query = mysqli_query($conn, $sql);

if ($query) {
  echo "การเพิ่มข้อมูลเรียบร้อย";
  if ($typeproduct == "tum") {
    $myfolder = "tumtum_inter/foodmenu/tum/";
    $serverpath = $_SERVER['DOCUMENT_ROOT'] . "/" . $myfolder;
    copy($imagespath, $serverpath . $picproduct);
  } elseif ($typeproduct == "tom") {
    $myfolder = "tumtum_inter/foodmenu/tom/";
    $serverpath = $_SERVER['DOCUMENT_ROOT'] . "/" . $myfolder;
    copy($imagespath, $serverpath . $picproduct);
  } elseif ($typeproduct == "larm") {
    $myfolder = "tumtum_inter/foodmenu/larm/";
    $serverpath = $_SERVER['DOCUMENT_ROOT'] . "/" . $myfolder;
    copy($imagespath, $serverpath . $picproduct);
  } elseif ($typeproduct == "yarm") {
    $myfolder = "tumtum_inter/foodmenu/yarm/";
    $serverpath = $_SERVER['DOCUMENT_ROOT'] . "/" . $myfolder;
    copy($imagespath, $serverpath . $picproduct);
  } elseif ($typeproduct == "fires") {
    $myfolder = "tumtum_inter/foodmenu/fires/";
    $serverpath = $_SERVER['DOCUMENT_ROOT'] . "/" . $myfolder;
    copy($imagespath, $serverpath . $picproduct);
  } elseif ($typeproduct == "drink") {
    $myfolder = "tumtum_inter/foodmenu/drink/";
    $serverpath = $_SERVER['DOCUMENT_ROOT'] . "/" . $myfolder;
    copy($imagespath, $serverpath . $picproduct);
  }
}
mysqli_close($conn);
?>
<tr>
  <td width="120"><a href="admindetail.php">กลับสู่หน้าหลัก </a></td>
  <td>&nbsp;</td>
</tr>