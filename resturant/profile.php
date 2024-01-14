<?php 
session_start();

require("connection/config.php");?>
	<?php include("include/header.php")?>
<!-- main style -->


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
<?php if(isset($_GET['id']))
					$id_user_enter=$_GET['id'];?>
						<h2>profile</h2>
						<p></p>
					<?php 
					

					if(isset($_POST['edit_user'])): 

 if(isset($_POST['name'])): 
	 $name = $_POST['name']; 
 endif; 

 if(isset($_POST['email'])): 
	 $email = $_POST['email']; 
 endif; 
 if(isset($_POST['phone'])): 
	 $phone = $_POST['phone']; 
 endif; 
 if(isset($_POST['city'])): 
	 $city = $_POST['city']; 
 endif; 
 if(isset($_POST['Street'])): 
	 $Street = $_POST['Street']; 
 endif; 
 if(isset($_POST['address'])): 
	 $address = $_POST['address']; 
 endif; 
 
 endif;


 $sql_display="SELECT id_user, email_user, phone_user, city, street, address, img_user, name_user FROM user WHERE id_user=:id_user_enter;";
 $stm=$conn->prepare($sql_display);
 $stm->bindParam(':id_user_enter',$id_user_enter, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
 $stm->execute();
 $resulte= $stm->fetchAll();
 foreach($resulte as $row)
 {

 $name1=$row['name_user'];
 $email1=$row['email_user'];
 $phone1=$row['phone_user'];
 $city1=$row['city'];
 $street1=$row['street'];
 $address1=$row['address'];
 
 }

$sql= "UPDATE user SET name_user=:name,email_user=:email, phone_user=:phone,  city=:city_user, street=:street_user, address=:address_user where id_user=:id_user_enter;";
  $stm=$conn->prepare($sql);
  $stm->bindParam(':name',$name, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
  $stm->bindParam(':email',$email, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
  $stm->bindParam(':phone',$phone, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
  $stm->bindParam(':city_user',$city, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
  $stm->bindParam(':street_user',$street, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
  $stm->bindParam(':address_user',$address, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
  $stm->bindParam(':id_user_enter',$id_user_enter, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير

  $stm->execute();
 ?>

 
				 	<div id="form_status"></div>
					<div class="contact-form">

						<form method="" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								 <input type="text" placeholder="Name" name="name" id="name" value="<?php if(isset( $name1)) echo  $name1; ?>" ><br><br>
							
								<input type="email" placeholder="email" name="email" id="email" value="<?php if(isset( $email1)) echo $email1; ?>">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone" value="<?php if(isset( $phone1)) echo  $phone1; ?>"><br><br>
								<input type="text" placeholder="city" name="city" id="city" value="<?php if(isset( $city1)) echo  $city1; ?>"><br><br>
								<input type="text" placeholder="Street" name="street" id="street" value="<?php if(isset( $street1)) echo  $street1; ?>"><br><br>	
								<input type="text" placeholder="address" name="address" id="address" value="<?php if(isset( $address1)) echo  $address1; ?>">
								
							</p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" name="edit_user" value="save" id="save"></p>
						</form>
					</div>
					

				</div>
<?php //}?>
			

			</div>
		</div>
	</div>
	
	<!-- end contact form -->


	<?php include("include/footer.php")?>