

	
	<?php //session_start();
	//include('../connection/config.php');

       if(isset($_GET['id']))
	      if(empty($_GET['id']))
             $id_user_enter=-1;
		else
		    $id_user_enter=$_GET['id'];
		else
		$id_user_enter=-1;
	
		// if($id_user_enter ==-1){header("location:include/‏‏header_user.php");}


?>
 

<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- proflie-->
	<link rel="stylesheet" href="assets/css/‏‏profile.css">


	<style>
		
		.mobile-hide-user img 
		 {
   			width: 50px;
 			 border-radius: 25px;
		}

		.mobile-show img{
			width: 40px;
 			border-radius: 20px;
    		margin-top: -10px
		}
		.mobile-show i{
			margin-top: 3px;
            position: absolute;
            right: 60px;

		}
		


	</style>
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="#">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->


						<?php if($id_user_enter ==-1){ //شرط الدخول لغير المستخدم 
							 	
								$stat_ph_user=0;?>

						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index_2.php">Home</a>
	
								</li>
								<li><a href="about.php">About</a></li>
								<!-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.php">404 page</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="shop.php">Shop</a></li>
									</ul>
								</li> -->

								<!-- <li><a href="news.php">News</a>
									<ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul>
								</li> -->

								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul>
								</li>
								<li><a href="cart.php">Cart</a></li>

								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<!-- ms -->
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>

										<a class="mobile-hide-user" href="login.php"><img src="assets/img/476ef9f595.png" alt=""></a>

									</div>
								</li>
							</ul>
						</nav>
						<?php }// انتهاء الشرط لغير المسخ?>

                          
						<?php										
										if ($id_user_enter<>-1)// شرط الدخول للسمتخدم
										{     


											$sql_test = "SELECT * FROM user WHERE id_user=:id_user_enters;";
													 $conn = new PDO($dsn, $db_user, $db_password);
													 $stet = $conn->prepare($sql_test);
													 $stet->bindParam(':id_user_enters', $id_user_enter, PDO::PARAM_STR); ///////////////// تأكد من تحديد نوع المتغير
													 $stet->execute();
													 $resulte = $stet->fetchAll();

												 foreach ($resulte as $row) {
                                                    $process_order=$row['activ_order'];
												 	$user_img=$row['img_user'];
												 	$order_activ=$row['activ_order'];
												 }
											?>




						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index_2.php?id=<?php echo $id_user_enter?>">Home</a>
	
								</li>
								<li><a href="about.php?id=<?php echo $id_user_enter?>">About</a></li>
								<!-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.php">404 page</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="shop.php">Shop</a></li>
									</ul>
								</li> -->

								<!-- <li><a href="news.php">News</a>
									<ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul>
								</li> -->

								<li><a href="contact.php?id=<?php echo $id_user_enter?>">Contact</a></li>
								<li><a href="shop.php?id=<?php echo$id_user_enter?>">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php?id=<?php echo$id_user_enter?>">Shop</a></li>
										<li><a href="checkout.php?id=<?php echo$id_user_enter?>">Check Out</a></li>
										<li><a href="cart.php?id=<?php echo$id_user_enter?>">Cart</a></li>
									</ul>
								</li>
								<li><a href="cart.php?id=<?php echo$id_user_enter?>">Cart</a></li>

								<li>
									<div class="header-icons">
										<!-- ايقونة السلة -->
										<?php if (isset($process_order)	>0){ //في حالة كان يوجد فاتورة لم يتم اكمالها ?>
									<a class="shopping-cart" href="cart.php?id=<?php echo$id_user_enter?>"><i class="fas fa-shopping-cart"></i>
										
									    <p class="color_shop_icone" style="width:10px; height: 10px; background-color:yellow;   border-radius: 5px;"></p> 
									
									</a>

										<?php }if(isset($process_order)<=0){ //في حالة لايوجد فاتورة نشطة 	 ?>
											<a class="shopping-cart" href="cart.php?id=<?php echo$id_user_enter?>"><i class="fas fa-shopping-cart"></i></a>

									   

										<?php }?>

										<!-- ms -->
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										
										<?php   		
												
												      if(empty($img_user)){ //الشرط المنطقي معكوس
												       $stat_ph_user=1;
												?>
										<!-- <a class="mobile-hide-user" href="profile.php?id=<?php// echo $id_user_enter?>"><img src="<?php echo $user_img ?>" alt=""></a> -->

								      <a class="mobile-hide-user" href="profile.php?id=<?php echo $id_user_enter?>"><img src="assets/img/476ef9f595.png" alt=""></a>

                                        
										        <?php }	else{ 

													$stat_ph_user=1;?>

									<!-- <a class="mobile-hide-user" href="profile.php?id=<?php// echo $id_user_enter?>"><img src="assets/img/476ef9f595.png" alt=""></a> -->

									<a class="mobile-hide-user" href="profile.php?id=<?php echo $id_user_enter?>"><img src="<?php //echo $user_img ?>" alt=""></a>
										
                                         
										 <?php  
										 }
										 
										}

										?>
									</div>
								</li>
							</ul>
						</nav>	

						<?php if($stat_ph_user==0){//حالة عرض صورة المستخدم للجوال?>				
						<a class="mobile-show search-bar-icon" href="login.php"><img src="assets/img/476ef9f595.png" alt=""></a>

                        <?php }elseif($stat_ph_user==1){?>
							<a class="mobile-show search-bar-icon" href="profile.php?id=<?php echo $id_user_enter?>"><img src="<?php echo $user_img ?>" alt=""></a>
						 
							<?php }elseif($stat_ph_user==2){?>
							<a class="mobile-show search-bar-icon" href="profile.php?id=<?php echo $id_user_enter?>"><img src="assets/img/476ef9f595.png" alt=""></a>
							
							<?php }//انتهاء الحالات ?>

							<a class="mobile-show search-bar-icon" id ="search" href="#"><i class="fas fa-search"></i></a>

						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

