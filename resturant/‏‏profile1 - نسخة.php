<?php require("connection/config.php");?>
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
						<h2>profile</h2>
						<p></p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">

						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								 <input type="text" placeholder="Name" name="name" id="name"><br><br>
							
								<input type="email" placeholder="email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone"><br><br>
								<input type="text" placeholder="city" name="city" id="city"><br><br>
								<input type="text" placeholder="Street" name="street" id="street"><br><br>	
								<input type="text" placeholder="Address" name="address" id="address">
								
							</p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
						</form>
					</div>
					<p><input type="submit" value="Save" id="save"></p>

				</div>

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