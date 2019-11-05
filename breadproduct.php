<?php
include('server/config.php');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD,
_DBNAME);
if (!$conn) die("Connection failed: " . mysqli_connect_error());
?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ขนมปัง</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery-3.1.1.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
	hideAll();
$('#bread').show();
 $('.show-bread').click(function() {
 hideAll();
$('#bread').fadeIn(999);
 });
 });
 function hideAll() {}
 </script>
 
</head>

<body>
<?php include('rsmenu.php');?>
<p> <img src="images/7.jpg" style="width:100%"></p>

    <div id="bread" class="container" style="display: none;">
    <?php
	   $sql = "SELECT picproduct, thname, engname, price FROM
      tbproduct where typeproduct = \"bread\" ORDER BY productID ASC";
       $conn->query("SET NAMES utf8");
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
   ?>
   <div class="col-sm-6 col-md-4 col-lg-3 product-card-1p">
    <a href="./images/product/bread/<?php echo $row["picproduct"];?>"data-fancybox="group" datawidth="400" data-height="400">
    <img src="./images/product/bread/<?php echo $row["picproduct"] ;?>" class=" col-xs-12"></a>

  <div class="col-md-12 productNameEn"><?php echo $row["engname"];?></div>
   <div class="col-md-12 productNameEn"><?php echo $row["thname"];?></div>
   <div class= "col-md-12 productNameEn" ><?php echo $row["price"];?>.</div>

  </div> 
    <?php
       }
      }
     ?>  
 </div>
<?php include('footer.php');?>

</body>
</html>
