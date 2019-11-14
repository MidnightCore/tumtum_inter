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
	<title>productall</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
   
</head>

<body>
<div class="text-center mt-4">
   <a class="btn btn-light-blue" href="admindetail.php">กลับหน้าหลัก</a>
</div>
<!--หน้าต่างหมวดอาหาร-->

<section id="our_menu" class="pb-5">
		<div class="container">
		
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
    						<a href="../foodmenu/tum/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="200" data-height="200">
							   <img src="../foodmenu/tum/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
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
    						<a href="../foodmenu/tom/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="../foodmenu/tom/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
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
    						<a href="../foodmenu/larb/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="../foodmenu/larb/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
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
    						<a href="../foodmenu/yarm/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="../foodmenu/yarm/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
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
    						<a href="../foodmenu/fires/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="../foodmenu/fires/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
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
    						<a href="../foodmenu/drink/<?php echo $row["picproduct"];?>"data-fancybox="groupstar"data-caption="<?php echo $row["engname"];?><?php echo $row["thname"];?> ราคา<?php echo $row["price"];?> บาท" datawidth="400" data-height="400">
							   <img src="../foodmenu/drink/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>
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

</body>

</html>