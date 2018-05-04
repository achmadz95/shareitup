<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-up! : Register Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">      
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css"?> rel="stylesheet">		
		<link href=<?php echo base_url()."assets/themes/css/bootstrappage.css"?> rel="stylesheet"/>
		
		<!-- logo icon -->
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">
		
		<!-- global styles -->
		<link href=<?php echo base_url()."assets/themes/css/flexslider.css"?> rel="stylesheet">
		<link href=<?php echo base_url()."assets/themes/css/main.css" ?> rel="stylesheet">

		<!-- scripts -->
		<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js"?>></script>
		<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js"?>></script>				
		<script src=<?php echo base_url()."assets/themes/js/superfish.js"?>></script>	
		<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotop.js"?>></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<!-- <div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div> -->
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<!-- <li><a href=<?php echo base_url()."login"?>>Login</a></li>
							<li><a href=<?php echo base_url()."register"?>>Register</a> --></li>	
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href=<?php echo base_url().""?> class="logo pull-left"><img src="assets/img/logo.png" class="site_logo" alt="" style="margin-left:-10px; width:11%;height:11%;"></a>
					<nav id="menu" class="pull-right">
				<!-- 		<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul> -->
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="<?php echo base_url("assets/themes/images/carousel/banner-1.jpg"); ?>" alt="Share-It-Up" >
				<h4><span>Only one step away to share the kindness</span></h4>
			</section>			

			<section class="main-content">

				<form action="<?php echo base_url(). 'Register/tambahuser'; ?>" method="post" enctype='multipart/form-data'>

				<div class="row">
					<div class="span6">				
						<h4 class="title" style="margin-left:0px;"><span class="text"><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegister</strong> Yourself</span></h4>
						<!-- <form action="#" method="post"> -->
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label for="username" class="control-label" style="margin-left:27px;">Username</label>
									<div class="controls">
										<input name="username" style="margin-left:27px;" type="text" placeholder="Enter your username" id="username" class="input-xlarge" required>
									</div>
								</div>
								<div class="control-group">
									<label for="password" class="control-label" style="margin-left:27px;">Password</label>
									<div class="controls">
										<input name="password" style="margin-left:27px;" type="password" placeholder="Enter your password" id="password" class="input-xlarge" required>
									</div>
								</div>

								<div class="control-group">
									<label for="nama" class="control-label" style="margin-left:27px;">Nama Lengkap</label>
									<div class="controls">
										<input name="nama" style="margin-left:27px;" type="text" placeholder="Enter your name" id="nama" class="input-xlarge" required>
									</div>
								</div>

								<div class="control-group">
									<label for="no_telp" class="control-label" style="margin-left:27px;">Nomor HP</label>
									<div class="controls">
										<input name="no_telp" style="margin-left:27px;" type="number" placeholder="Enter your nomor telp" id="no_telp" class="input-xlarge" required>
								</div>

								<div class="control-group">
									<label for="" class="control-label" style="margin-left:27px;">Foto Profil</label>
									<div class="controls">
										<input type="file" name="image" style="margin-left:27px;">
									</div>
								</div>

								<div class="control-group">
									<label for="" class="control-label" style="margin-left:27px;">Foto KTM</label>
									<div class="controls">
										<input type="file" name="image3" style="margin-left:27px;">
									</div>
								</div>
								
							</fieldset>
									
					</div>

					<div class="span6">					
						<h4 class="title" style="margin-left:0px;"><!-- <span class="text">&nbsp&nbsp&nbsp&nbsp&nbspDon't have account?<strong>&nbspRegister</strong></span> --></h4>
						
							<fieldset>

								<div class="control-group">
									<label for="kodepos" class="control-label" style="margin-left:20px;">Kode Pos</label>
									<div class="controls">
										<input name="kodepos" style="margin-left:20px;" id="kodepos" type="text" placeholder="Enter your kode pos" class="input-xlarge" required>
									</div>
								</div>

								<div class="control-group">
									<label for="alamat" class="control-label" style="margin-left:20px;">Alamat</label>
									<div class="controls">
										<input name="alamat" style="margin-left:20px;" id="alamat" type="text" placeholder="Enter your alamat" class="input-xlarge" required>
									</div>
								</div>
								
								<div class="control-group">
									<label for="kecamatan" class="control-label" style="margin-left:20px;">Kecamatan</label>
									<div class="controls">
										<input name="kecamatan" style="margin-left:20px;" id="kecamatan" type="text" placeholder="Enter your kecamatan" class="input-xlarge" required>
									</div>
								</div>

								<div class="control-group">
									<label type="email" for="email" class="control-label" style="margin-left:20px;">E-mail</label>
									<div class="controls">
										<input name="email" style="margin-left:20px;" type="email" placeholder="Enter your email" id="email" class="input-xlarge" required>
									</div>
								</div>

								<div class="control-group">
									<label for="" class="control-label" style="margin-left:20px;">Foto KTP</label>
									<div class="controls">
										<input type="file" name="image2" style="margin-left:20px;" required="">
									</div>
								</div>
							

								<div class="control-group" style="margin-left:20px;">
									
								</div>
								<hr>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" style="margin-left:20px;" type="submit" value="Sign me up!">
									<hr>
									<!-- <p class="reset" style="margin-left:27px;">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p> -->
								</div>
								<!-- <div class="actions" style="margin-left:20px;"><input name="submit" tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div> -->
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="login">Login</a></li>  
							<li><a href="register">Register</a></li>
							<li><a href="login">Home</a></li>
							<li><a href="login">Barang</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="login">My Profile</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="assets/img/logo2.png" style="margin-left:-11px;" class="site_logo" alt=""></p>
						<p>Share It Up ini menggunakan design modern.<br> Share It Up ini mudah digunakan. Hanya pilih Barang yang ingin kamu pinjam dan klik pinjam!<br> Share It Up ini live support selama 24jam.</p>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright ©Share-It-Up 2017</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>