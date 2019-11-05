<!doctype html>
<html>
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="css/menu.css">
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
           
        } 

        .footer {
            background-image: url("images/bs.jpg");
            background-size: cover;
        }

        .jumbotron {
            background-image: url("chili.jpg");
            background-size: cover;

            /* ทำภาพเป็น Parallax */
            /* background-attachment: fixed; */
            /* background-position: center; */
            /* background-repeat: no-repeat;  */
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
						<a class="nav-link active" id="tum-tab" data-toggle="tab" href="#tum" role="tab">ส้มตำ</a>
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
						<a class="nav-link" id="fries-tab" data-toggle="tab" href="#fries" role="tab">ของทอดและอื่นๆ</a>
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
					<div class="tab-pane fade show active" id="tum" role="tabpanel" aria-labelledby="tum-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_menu">
									<img src="foodmenu/tum/ตำไทย.jpg" alt="burger">
									
									<div class="menu_content">
										<br><h4> ตำไทย <span>55 บาท</span></h4>
										<br><br>
									</div>	
								</div>
								<div class="single_menu">
									<img src="foodmenu/tum/ตำกุ้งสด.jpg" alt="ตำกุ้งสด">
									
									<div class="menu_content">
										<br><h4> ตำกุ้งสด <span>100 บาท</span></h4>
										<br><br>
									</div>	
								</div>
								<div class="single_menu">
									<img src="foodmenu/tum/ตำข้าวโพดไข้เค็ม.jpg" alt="ตำข้าวโพดไข่เค็ม">
									
									<div class="menu_content">
										<br><h4> ตำข้าวโพดไข่เค็ม <span>80 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tum/ตำซั่ว.jpg" alt="ตำซั่ว">
									
									<div class="menu_content">
										<br><h4> ตำซั่ว <span>55 บาท</span></h4>
										<br><br>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single_menu">
									<img src="foodmenu/tum/ตำลาว.jpg" alt="ตำลาว">
									
									<div class="menu_content">
										<br><h4> ตำลาว <span>55 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tum/ตำปูม้า.jpg" alt="ตำปูม้า">
									
									<div class="menu_content">
										<br><h4> ตำปูม้า <span>90 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tum/ตำปลาช่อนทอด.jpg" alt="ตำปลาช่อนทอด">
									
									<div class="menu_content">
										<br><h4> ตำปลาช่อนทอด <span>100 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tum/ตำถาด.jpg" alt="ตำถาด">
									
									<div class="menu_content">
										<br><h4> ตำถาด <span>120 บาท</span></h4>
										<br><br>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- ต้ม -->
					<div class="tab-pane fade" id="tom" role="tabpanel" aria-labelledby="tom-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_menu">
									<img src="foodmenu/tom/ต้มแซ่บกกระดูกอ่อน.jpg" alt="ต้มแซ่บกกระดูกอ่อน">
									<div class="menu_content">
										<br><h4> ต้มแซ่บกกระดูกอ่อน <span>100 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tom/ต้มโคล้งปลาดุกย่าง.jpg" alt="ต้มโคล้งปลาดุกย่าง">
									<div class="menu_content">
										<br><h4> ต้มโคล้งปลาดุกย่าง <span>150 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tom/ซุปเปอร์ลูกทุ่ง.jpg" alt="ซุปเปอร์ลูกทุ่ง">
									<div class="menu_content">
										<br><h4> ซุปเปอร์ลูกทุ่ง <span>95 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tom/ต้มแซ่บซีฟู้ด.jpg" alt="ต้มแซ่บซีฟู้ด">
									<div class="menu_content">
										<br><h4> ต้มแซ่บซีฟู้ด <span>95 บาท</span></h4>
										<br><br>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single_menu">
									<img src="foodmenu/tom/แกงเห็ดรวม.jpg" alt="แกงเห็ดรวม">
									<div class="menu_content">
										<br><h4> แกงเห็ดรวม <span>100 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tom/แกงอ่อมหมู.jpg" alt="แกงอ่อมหมู">
									<div class="menu_content">
										<br><h4> แกงอ่อมหมู <span>95 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tom/แกงผักหวานใส่เห็ดเผาะ.jpg" alt="แกงผักหวานใส่เห็ดเผาะ">
									<div class="menu_content">
										<br><h4> แกงผักหวานใส่เห็ดเผาะ <span>150 บาท</span></h4>
										<br><br>
									</div>
								</div>
								<div class="single_menu">
									<img src="foodmenu/tom/ต้มไก่ใบมะขาม.jpg" alt="ต้มไก่ใบมะขาม">
									<div class="menu_content">
										<br><h4> ต้มไก่ใบมะขาม <span>95 บาท</span></h4>
										<br><br>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- ลาบ -->
					<div class="tab-pane fade" id="larb" role="tabpanel" aria-labelledby="larb-tab">
							<div class="row">
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบหมู.jpg" alt="ลาบหมู">
											<div class="menu_content">
												<br><h4> ลาบหมู <span>90 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบหมูทอด.jpg" alt="ลาบหมูทอด">
											<div class="menu_content">
												<br><h4> ลาบหมูทอด <span>95 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบเห็ดฟาง.jpg" alt="ลาบเห็ดฟาง">
											<div class="menu_content">
												<br><h4> ลาบเห็ดฟาง <span>85 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบปลาหมึก.jpg" alt="ลาบปลาหมึก">
											<div class="menu_content">
												<br><h4> ลาบปลาหมึก <span>85 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบปลาดุกกรอบ.jpg" alt="ลาบปลาดุกกรอบ">
											<div class="menu_content">
												<br><h4> ลาบปลาดุกกรอบ <span>90 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบกุ้ง.jpg" alt="ลาบกุ้ง">
											<div class="menu_content">
												<br><h4> ลาบกุ้ง <span>100 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/larb/ลาบไก่ย่าง.jpg" alt="ลาบไก่ย่าง">
											<div class="menu_content">
												<br><h4> ลาบไก่ย่าง <span>95 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/larb/ตับหวาน.jpg" alt="ตับหวาน">
											<div class="menu_content">
												<br><h4> ตับหวาน <span>90 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
					  </div>
							
					</div>

					<!-- ยำ -->
					<div class="tab-pane fade" id="yarm" role="tabpanel" aria-labelledby="yarm-tab">
							<div class="row">
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/yarm/ยำไก่ย่าง.jpg" alt="ยำไก่ย่าง">
											<div class="menu_content">
												<br><h4> ยำไก่ย่าง <span>85 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/yarm/ยำปูม้า.jpg" alt="ยำปูม้า">
											<div class="menu_content">
												<br><h4> ยำปูม้า <span>140 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/yarm/ยำผักบุ้งกรอบ.jpg" alt="ยำผักบุ้งกรอบ">
											<div class="menu_content">
												<br><h4> ยำผักบุ้งกรอบ <span>130 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/yarm/ยำรวมมิตร.jpg" alt="ยำรวมมิตร">
											<div class="menu_content">
												<br><h4> ยำรวมมิตร <span>95 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/yarm/ยำหอยแครง.jpg" alt="ยำหอยแครง">
											<div class="menu_content">
												<br><h4> ยำหอยแครง <span>120 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/yarm/กุ้งแช่น้ำปลา.jpg" alt="กุ้งแช่น้ำปลา">
											<div class="menu_content">
												<br><h4> กุ้งแช่น้ำปลา <span>130 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/yarm/หมูมะนาว.jpg" alt="หมูมะนาว">
											<div class="menu_content">
												<br><h4> หมูมะนาว <span>100 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/yarm/พล่ากุ้ง.jpg" alt="พล่ากุ้ง">
											<div class="menu_content">
												<br><h4> พล่ากุ้ง <span>100 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
					  </div>
							
					</div>
					
					<!-- ของทอดอื่นๆ -->
					<div class="tab-pane fade" id="fries" role="tabpanel" aria-labelledby="fries-tab">
							<div class="row">
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/fires/ฝรั่งห่อลาว.jpg" alt="ฝรั่งห่อลาว">
											<div class="menu_content">
												<br><h4> ฝรั่งห่อลาว <span>160 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/fires/ไส้กรอกอีสาน.jpg" alt="ไส้กรอกอีสาน">
											<div class="menu_content">
												<br><h4> ไส้กรอกอีสาน <span>95 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/fires/ปีกไก่ทอด.jpg" alt="ปีกไก่ทอด">
											<div class="menu_content">
												<br><h4> ปีกไก่ทอด <span>95 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/fires/แหนมเอ็นไก่ทอด.jpg" alt="แหนมเอ็นไก่ทอด">
											<div class="menu_content">
												<br><h4> แหนมเอ็นไก่ทอด <span>95 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/fires/ไส้ตันทอดกระเทียม.jpg" alt="ไส้ตันทอดกระเทียม">
											<div class="menu_content">
												<br><h4> ไส้ตันทอดกระเทียม <span>100 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/fires/เกี๊ยวห่อลาบ.jpg" alt="เกี๊ยวห่อลาบ">
											<div class="menu_content">
												<br><h4> เกี๊ยวห่อลาบ <span>120 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/fires/สเต็กลาวหมู.jpg" alt="สเต็กลาวหมู">
											<div class="menu_content">
												<br><h4> สเต็กลาวหมู <span>160 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/fires/ปากเป็ดทอด.jpg" alt="ปากเป็ดทอด">
											<div class="menu_content">
												<br><h4> ปากเป็ดทอด <span>100 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
					  </div>
							
					</div>
					
					<!-- เครื่องดื่ม -->
					<div class="tab-pane fade" id="drink" role="tabpanel" aria-labelledby="drink-tab">
							<div class="row">
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/drink/น้ำแตงโมปั่น.jpg" alt="น้ำแตงโมปั่น">
											<div class="menu_content">
												<br><h4> น้ำแตงโมปั่น <span>45 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/drink/น้ำมะพร้าวปั่น.jpg" alt="น้ำมะพร้าวปั่น">
											<div class="menu_content">
												<br><h4> น้ำมะพร้าวปั่น <span>45 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/drink/น้ำส้มปั่น.jpg" alt="น้ำส้มปั่น">
											<div class="menu_content">
												<br><h4> น้ำส้มปั่น <span>45 บาท</span></h4>
												<br><br>
											</div>
										</div>
										
									</div>
									<div class="col-md-6">
										<div class="single_menu">
											<img src="foodmenu/drink/น้ำกระเจี๊ยบ.jpg" alt="น้ำกระเจี๊ยบ">
											<div class="menu_content">
												<br><h4> น้ำกระเจี๊ยบ <span>25 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/drink/น้ำลำไย.jpg" alt="น้ำลำไย">
											<div class="menu_content">
												<br><h4> น้ำลำไย <span>25 บาท</span></h4>
												<br><br>
											</div>
										</div>
										<div class="single_menu">
											<img src="foodmenu/drink/น้ำเก๊กฮวย.jpg" alt="น้ำเก๊กฮวย">
											<div class="menu_content">
												<br><h4> น้ำเก๊กฮวย <span>25 บาท</span></h4>
												<br><br>
											</div>
										</div>
									</div>
					  </div>
							
					</div>

				</div>


			</div>
		</div>
	</section>
<?php include('footer.php');?>
</body>
</html>