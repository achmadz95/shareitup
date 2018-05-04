<?php
	$user_id=$this->session->userdata('username');
 
	if(!$user_id){
 
  		redirect('Login');
	}
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-up! : Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">      
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css";?> rel="stylesheet">		
		<link href=<?php echo base_url()."assets/themes/css/bootstrappage.css";?> rel="stylesheet"/>
		
		<!-- logo icon -->
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">

		<!-- global styles -->
		<link href=<?php echo base_url()."assets/themes/css/main.css" ; ?> rel="stylesheet">
		<link href=<?php echo base_url()."assets/themes/css/flexslider.css";?> rel="stylesheet">

		<!--Catatan popup-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
		<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

    	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

		<!-- scripts -->
		<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js";?>></script>
		<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js";?>></script>				
		<script src=<?php echo base_url()."assets/themes/js/superfish.js";?>></script>	
		<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotopCari.js";?>></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body>


		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><b>Hi, <?php echo $this->session->userdata('nama_user'); ?></b>		</li>	
							
								
							<li><a style="padding: 3px 5px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
	

		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<img src="<?php echo base_url('assets/img/logo.png'); ?> " style="width: 11%; height: 100%; margin-left:-10px;"/>

					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo base_url("Home")?>">Home</a>					
							</li>															
							<li><a href="<?php echo base_url("Profile")?>">Profil</a>
							</li>
							<li><a href="<?php echo base_url("Kelola_barang")?>">Barang</a>
							</li>							
						</ul>
					</nav>
				</div>
			</section>
			<section class="main-content">
			
			<div class="span2" style="margin-top:20px; float:right">
					  <form method="POST" action="<?php echo base_url().'Home/urut'?>">
					  <div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sort By Location
						<span class="caret"></span>
					</button>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Kelurahan</li>
							<li name="urutan"><a href="<?php echo base_url().'Home/urut/sukolilo'?>">Sukolilo</a></li>
							<li name="urutan"><a href="<?php echo base_url().'Home/urut/Mulyorejo'?>">Mulyorejo</a></li>
							<li name="urutan"><a href="<?php echo base_url().'Home/urut/sukolilo'?>">Abadi</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Kecamatan</li>
							<li name="urutan"><a href="#">Bagong</a></li>
						</ul>
					</div>
					</form>
				</div>
				
				<form method="POST" action="<?php echo base_url().'Home/cari'?>">
			<div class="span4" style="margin-top:20px; float:right">
				<input name="pencari" type="text" class="input-block-level search-query" Placeholder="eg. Nama / Jenis Barang">
				</div>
					
			</form>
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Barang <strong>Masuk</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">								
											<?php if(empty($data)){echo 'tidak ada barang';}else{ foreach ($data as $x) { ?>				
												 <li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="<?php echo base_url('Barang_detail?id_barang=').$x['id_barang']; ?>"><img src="<?php echo base_url($x['foto_barang']); ?>" alt="" /></a></p>
														<a href="product_detail.html"><h5><?php echo $x['nama_barang'] ?></h5></a><br/>
														<a href="products.html"><p><?php echo $x['jenis'] ?><p></a>
														<!-- <p class="price">$17.25</p> -->
													</div>
												</li>
												
											<?php }} ?>																													
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>		
					</div>				
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright ©Share-It-Up 2017</span>
			</section>
		</div>
		<script src="assets/themes/js/common.js"></script>
		<script src="assets/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
