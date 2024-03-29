<?php require_once('connection/dbconnect.php');?>
<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

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
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index_2.php">Home</a>
	
								</li>
								<li><a href="about.php">About</a></li>
								

								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
									<li><a href="single-product.php">Single Product</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul>
								</li>
								<li><a href="cart.php">Cart</a></li>

								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- ms name  -->
						<h1>welcome</h1>
							<i class="fa-solid fa-pen-to-square"></i>
						
						<img class="img-profile" src="./assets/img/breadcrumb-bg.jpg" alt="" >
						<form action="" method="post" >
							<i class="fa-regular fa-pen-to-square"></i>
						  <input type="file" name="file" id="file">
					       </form>
						<p>name</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section">
		<div class="container">
			<div class="row-profile">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>profile</h2>
						<p></p>
					</div>
				 	<div id="form_status"></div>



		
		
		

       
		<?php
		/*
		$id_user_enter=$_GET['id']
		 $sql="SELECT * FROM `user` where id_user=:id ";
        
		if(isset($_POST['submit']))?>
 
		<?php if(isset($_POST['Name'])):
		$user_name =$_POST['Name'];
		endif;?>

		<?php if(isset($_POST['email'])):
			$user_email = $_POST['email'];
		endif; ?>

		<?php if(isset($_POST['phone'])):
			$user_phone = $_POST['phone'];
		endif; ?>

		<?php if(isset($_POST['city'])):
			$user_city = $_POST['city'];
		endif; ?>

		<?php if(isset($_POST['Street'])):
			$user_street =$_POST['street'];
		endif; ?>

		<?php if(isset($_POST['Address'])):
			$user_address=$_POST['Address'];
		endif; ?>

		<?php
		//  $profile = array('name_user'=> $_POST['Name'],
		// 'email_user'=> $_POST['email'],
		// 'phone_user'=> $_POST['phone'],
		// 'city'=> $_POST['city'],
		// 'street'=>$_POST['street'],
		// 'address'=>$_POST['Address']
		// ) 
		*/
		?>


<?php
 /* $sql = "UPDATE user SET name_user=:name,email_user=:email,phone_user=:phone,
city=:city,street=:street,address=:Address WHERE id=:id";
 $statement = $conn-> prepare($sql);
 $statement->$bindparam(':name',$user_name)
 $statement->$bindparam(':email',$user_email)
 $statement->$bindparam(':phone',$user_phone)
 $statement->$bindparam(':city',$user_city)
 $statement->$bindparam(':street',$user_street)
 $statement->$bindparam(':Address',$user_address)
    if($statement->execute()){
		echo "the update is complet succssful";
		$user = $conn->prepare("SELECT * FROM user where id_user=:id ");
        $user->$bindparam('id',$_POST['id_user']);
		$user->execute();
		$_SESSION['user'] = $user->fetchObject();
		header("refresh:2;");
       
		
	}
	else{
		echo"the update is not complet succssful"
	}

	else {
		session_unset();
		session_destroy();
		header("location:login.php");

	}
	*/



//  session_start();

if(isset($_POST['submit']))
{
    $user_name = $_POST['Name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_city = $_POST['$city'];
    $user_street = $_POST['$street'];
    $user_address = $_POST['address'];

    try {

        $query = "UPDATE user SET name_user=:name,email_user=:email,phone_user=:phone,
		city=:city,street=:street,address=:Address WHERE id_user=:id LIMIT 1";
        $statement = $conn->prepare($query);
		$statement->bindParam(':name',$user_name);
		$statement->bindParam(':email',$user_email);
		$statement->bindParam(':phone',$user_phone);
		$statement->bindParam(':city',$user_city);
		$statement->bindParam(':street',$user_street);
		$statement->bindParam(':Address',$user_address);
        $query_execute = $statement->execute();

        if($query_execute)  
        {
            $_SESSION['message'] = "Updated Successfully";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Updated";
            header('Location: index.php');
            exit(0);
        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>



<?php
                        if(isset($_GET['id']))
                        {
                            $id = $_GET['id'];

                            $query = "SELECT * FROM students WHERE id=? LIMIT 1";
                            $statement = $conn->prepare($query);
                            $statement->bindParam(1,$id);
                            $statement->execute();

                            $data = $statement->fetch(PDO::FETCH_ASSOC);
                            ?>
					<div class="contact-form">
							 
				

						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							
							<p>
								 <input type="text" placeholder="Name" name="name" id="name" value="<?=$data['user_name'];?>"><br><br>
							
								<input type="email" placeholder="email" name="email" id="email" value="<?=$data['user_email'];?>">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone" value="<?=$data['user_phone'];?>"><br><br>
								<input type="text" placeholder="city" name="city" id="city" value="<?=$data['user_city'];?>"><br><br>
								<input type="text" placeholder="Street" name="street" id="street" value="<?=$data['user_street'];?>"><br><br>	
								<input type="text" placeholder="Address" name="addresses" id="address" value="<?=$data['user_address'];?>">
								
							</p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							
						</form>
					</div>
					<p>><a id="save" href="student-edit.php?id=<?=$row['id']?>" class="btn btn-info">save</a></p>

				</div>
				<?php
                        }
                        else
                        {
                            echo "<h5>No ID Found</h5>";
                        }
                        ?>

				<!-- ms -->
				<!-- <div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</div>
	<!-- end contact form -->


	<?php include("include/footer.php")?>