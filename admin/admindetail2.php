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
    <link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url("../images/chili.jpg");
            background-size: cover;
            width: 100vw;
            height: 100vh;
            font-family: 'Itim', cursive;
        }
    </style>
</head>

<body>
    <div class="container"><br><br><br><br><br><br>
        <h1 style="color:white">หน้าควบคุมหลัก</h1><br>
        <div class="card-deck">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <h5 class="card-text">ดูรายการติดต่อสอบถาม</h5><br>
                    <a href="contactusall.php" target="blank" class="btn btn-outline-dark">ไปยังหน้า</a>
                </div>
            </div>
            <div class="card bg-warning">
                <div class="card-body text-center">
                    <h5 class="card-text">ดูรายการสินค้ารวม</h5><br>
                    <a href="productall.php" target="blank" class="btn btn-outline-dark">ไปยังหน้า</a>
                </div>
            </div>
            <div class="card bg-success">
                <div class="card-body text-center">
                    <h5 class="card-text">เพิ่มรายการสินค้า</h5><br>
                    <a href="insertproduct.php" target="blank" class="btn btn-outline-dark">ไปยังหน้า</a>
                </div>
            </div>
            <div class="card bg-danger">
                <div class="card-body text-center">
                    <h5 class="card-text">ลบรายการสินค้า</h5><br>
                    <a href="productfordelete.php" target="blank" class="btn btn-outline-dark">ไปยังหน้า</a>
                </div>
            </div>
        </div><br><br><br><br>

        <div style="text-align:right">
            <a href="logoutadmin.php" target="blank" class="btn btn-light">ออกจากระบบ</a>
        </div>
        <?php
        mysqli_close($con);
        ?>

    </div>
</body>

</html>