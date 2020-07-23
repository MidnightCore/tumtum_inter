<?php
include('server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD,
_DBNAME);
if (!$conn) die("Connection failed: " . mysqli_connect_error());
?> 
<!doctype html>
<html>
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link  href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="css/menu.css">
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
            background-color: #fafafa;
			font-family: 'Itim', cursive;
        } 

        .footer {
            background-image: url("images/bs.jpg");
            background-size: cover;
        }

        .jumbotron {
            background-image: url("chili.jpg");
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
            /* margin-bottom: -20px; */
        }
        #qq{
            color: rgb(255, 254, 254);
        }
    </style>
</head>

<body>
<?php include('rsmenu.php');?>
 <!--หน้าต่างหมวดอาหาร-->
    <section id="our_menu" class="pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page_title text-center mb-4">
						<h1>our menu</h1>
						<div class="single_line"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link" id="tum-tab" data-toggle="tab" href="#tum" role="tab">ส้มตำ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="tom-tab" data-toggle="tab" href="#tom" role="tab">ต้ม</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="larb-tab" data-toggle="tab" href="#larb" role="tab">ลาบน้ำตก</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="yarm-tab" data-toggle="tab" href="#yarm" role="tab">ยำ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="fries-tab" data-toggle="tab" href="#fires" role="tab">ของทอดและอื่นๆ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="drink-tab" data-toggle="tab" href="#drink" role="tab">เครื่องดื่ม</a>
					</li>
				</ul>


			</div>


			<!--อาหาร-->
			<div class="row">
				<div class="tab-content col-lg-12" id="myTabContent">
					<!-- ตำ -->
					<div id="tum" class="tab-pane fade" role="tabpanel" aria-labelledby="tum-tab">
					<div class="row">
    				<?php
	  					$sqlstar = "SELECT picproduct, thname, price FROM
    					tbproduct where typeproduct = \"tum\" ORDER BY productID ASC";
      					$conn->query("SET NAMES utf8");
     					$resultstar = $conn->query($sqlstar);
     					if ($resultstar->num_rows > 0) {
     					while($row = $resultstar->fetch_assoc()) {
   					?>
   						<div class="col-md-6">
							<div class="single_menu">
    						<a href="foodmenu/tum/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="foodmenu/tum/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
							   <br><br>
   							<div class="menu_content"><?php echo $row["thname"];?></div>
   							<div class="menu_content"><?php echo $row["price"];?>.</div>
							</div>
  						</div> 
    					<?php
       						}
     						}
     					?>  
					</div>
					</div>

					<!-- ต้ม -->
					<div id="tom" class="tab-pane fade" role="tabpanel" aria-labelledby="tom-tab">
					<div class="row">
    				<?php
	  					$sqlstar = "SELECT picproduct, thname, price FROM
    					tbproduct where typeproduct = \"tom\" ORDER BY productID ASC";
      					$conn->query("SET NAMES utf8");
     					$resultstar = $conn->query($sqlstar);
     					if ($resultstar->num_rows > 0) {
     					while($row = $resultstar->fetch_assoc()) {
   					?>
   						<div class="col-md-6">
							<div class="single_menu">
    						<a href="foodmenu/tom/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="foodmenu/tom/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
							   <br><br>
   							<div class="menu_content"><?php echo $row["thname"];?></div>
   							<div class="menu_content"><?php echo $row["price"];?>.</div>
							</div>
  						</div> 
    					<?php
       						}
     						}
     					?>  
					</div>
					</div>

					<!-- ลาบ -->
					<div id="larb" class="tab-pane fade" role="tabpanel" aria-labelledby="larb-tab">
					<div class="row">
    				<?php
	  					$sqlstar = "SELECT picproduct, thname, price FROM
    					tbproduct where typeproduct = \"larb\" ORDER BY productID ASC";
      					$conn->query("SET NAMES utf8");
     					$resultstar = $conn->query($sqlstar);
     					if ($resultstar->num_rows > 0) {
     					while($row = $resultstar->fetch_assoc()) {
   					?>
   						<div class="col-md-6">
							<div class="single_menu">
    						<a href="foodmenu/larb/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="foodmenu/larb/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
							   <br><br>
   							<div class="menu_content"><?php echo $row["thname"];?></div>
   							<div class="menu_content"><?php echo $row["price"];?>.</div>
							</div>
  						</div> 
    					<?php
       						}
     						}
     					?>  
					</div>
					</div>

					<!-- ยำ -->
					<div id="yarm" class="tab-pane fade" role="tabpanel" aria-labelledby="yarm-tab">
					<div class="row">
    				<?php
	  					$sqlstar = "SELECT picproduct, thname, price FROM
    					tbproduct where typeproduct = \"yarm\" ORDER BY productID ASC";
      					$conn->query("SET NAMES utf8");
     					$resultstar = $conn->query($sqlstar);
     					if ($resultstar->num_rows > 0) {
     					while($row = $resultstar->fetch_assoc()) {
   					?>
   						<div class="col-md-6">
							<div class="single_menu">
    						<a href="foodmenu/yarm/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="foodmenu/yarm/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
							   <br><br>
   							<div class="menu_content"><?php echo $row["thname"];?></div>
   							<div class="menu_content"><?php echo $row["price"];?>.</div>
							</div>
  						</div> 
    					<?php
       						}
     						}
     					?>  
					</div>
					</div>
					
					<!-- ของทอดอื่นๆ -->
					<div id="fires" class="tab-pane fade" role="tabpanel" aria-labelledby="fires-tab">
					<div class="row">
    				<?php
	  					$sqlstar = "SELECT picproduct, thname, price FROM
    					tbproduct where typeproduct = \"fires\" ORDER BY productID ASC";
      					$conn->query("SET NAMES utf8");
     					$resultstar = $conn->query($sqlstar);
     					if ($resultstar->num_rows > 0) {
     					while($row = $resultstar->fetch_assoc()) {
   					?>
   						<div class="col-md-6">
							<div class="single_menu">
    						<a href="foodmenu/fires/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="foodmenu/fires/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
							   <br><br>
   							<div class="menu_content"><?php echo $row["thname"];?></div>
   							<div class="menu_content"><?php echo $row["price"];?>.</div>
							</div>
  						</div> 
    					<?php
       						}
     						}
     					?>  
					</div>
					</div>
					
					<!-- เครื่องดื่ม -->
					<div id="drink" class="tab-pane fade" role="tabpanel" aria-labelledby="drink-tab">
					<div class="row">
    				<?php
	  					$sqlstar = "SELECT picproduct, thname, price FROM
    					tbproduct where typeproduct = \"drink\" ORDER BY productID ASC";
      					$conn->query("SET NAMES utf8");
     					$resultstar = $conn->query($sqlstar);
     					if ($resultstar->num_rows > 0) {
     					while($row = $resultstar->fetch_assoc()) {
   					?>
   						<div class="col-md-6">
							<div class="single_menu">
    						<a href="foodmenu/drink/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="foodmenu/drink/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
							   <br><br>
   							<div class="menu_content"><?php echo $row["thname"];?></div>
   							<div class="menu_content"><?php echo $row["price"];?>.</div>
							</div>
  						</div> 
    					<?php
       						}
     						}
     					?>  
					</div>
					</div>


			</div>
		</div>
	</section>
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