<?php
include('server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD,
_DBNAME);
if (!$conn) die("Connection failed: " . mysqli_connect_error());
?> 



<!doctype html>
<html>
<head>
    <title>TumTum Inter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">


<script>
	$(document).ready(function() {
		hideAll();
	$('#star').show();
 		$('.show-star').click(function() {
 			hideAll();
			$('#star').fadeIn(999);
		 });
	 });
	function hideAll() {}
</script>
 
 
     <style>
        #navfix {
            margin-left: 40px;
            font-size: 18px;
        }

        #navfix2 {
            margin-left: 40px;
        }

        #navfix3 {
            font-size: 18px;
            margin-left: 50px;
        }

        body {
            background-image: url("images/ve1.jpg");
            background-size: cover;
            font-family: 'Itim', cursive;
        }

        .footer {
            background-image: url("images/bs.jpg");
            background-size: cover;
        }

        .jumbotron {
            background-image: url("images/chili.jpg");
            background-size: cover;
        }

        #covertext {
            color: white;
            text-size-adjust: 50px;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        #aaa {
            background-image: url("images/bs.jpg");
            background-size: cover;
            margin-top: -10px;
        }
        #qq{
            color: rgb(255, 254, 254);
        }
    </style>
 
</head>

<body>
<?php include('rsmenu.php');?>


 <div class="container">
        <h1 style="color: rgb(255, 253, 253)">โปรโมชั่น!!</h1>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <!-- <li data-target="#demo" data-slide-to="2"></li> -->
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/pro1.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="images/pro2.png" alt="Chicago" width="1100" height="500">
                </div>
                <!-- <div class="carousel-item">
                    <img src="images/chili.jpg" alt="New York" width="1100" height="500">
                </div> -->
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <br><br><br>
        <h1 style="color: rgb(255, 255, 255)">เมนูแนะนำ</h1>
    </div>

    <!-- ภาพสินค้าแถวละ 3 ภาพ -->
    <div class="container" style="margin-top:30px">
        <div class="row" id="qq">
            <div class="col-sm-4">
                <img src="food/f1.jpg" class="rounded" alt="Cinque Terre" width="250"
                    height="250">
                <h5>ปากเป็ดทอด</h5>
            </div>
            <div class="col-sm-4">
                <img src="food/f2.jpg" class="rounded" alt="Cinque Terre" width="250"
                    height="250">
                <h5>ไส้ตันทอด</h5>
            </div>
            <div class="col-sm-4">
                <img src="food/f3.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>ปีกไก่ทอด</h5>
            </div>
        </div>
        <br><br><br>
        <div class="row" id="qq">
            <div class="col-sm-4" >
                <img src="food/f4.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>คอหมูย่าง</h5>
            </div>
            <div class="col-sm-4">
                <img src="food/f5.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>ไก่อบโอ่ง</h5>
            </div>
            <div class="col-sm-4">
                <img src="food/f6.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>พล่ากุ้ง</h5>
            </div>
        </div>
        <br><br><br>
        <div class="row" id="qq">
            <div class="col-sm-4">
                <img src="food/f7.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>ยำผักบุ้งกรอบ</h5>
            </div>
            <div class="col-sm-4">
                <img src="food/f8.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>ยำรวม</h5>
            </div>
            <div class="col-sm-4">
                <img src="food/f9.jpg" class="rounded" alt="Cinque Terre" width="250" height="250">
                <h5>ลาบหมู</h5>
            </div>
        </div>
    </div>
    <br><br>

<?php include('footer.php');?>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.4.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.4.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
</body>
</html>
