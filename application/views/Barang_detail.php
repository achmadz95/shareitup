
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-Up : Detail Barang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- Compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
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
		<script src=<?php echo base_url()."themes/js/jquery.fancybox.js"?>></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" action="<?php echo base_url().'Home/cari'?>">

						<input type="text" class="input-block-level search-query" Placeholder="eg. Nama / Jenis Barang">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<!-- Username dan Saldo-->
						<ul class="user-menu">
							<li>
								<b style="margin-right: 0%;">Hi, <?php echo $this->session->userdata('nama_user'); ?></b>
							</li>
							<b>
								Saldo Anda : Rp. <?php echo number_format ($this->session->userdata['saldo'],2,',','.'); ?>
							</b>
							<li>
								<a style="padding: 3px 5px; margin-right: -4px; width: 105px; height: 24px" class="btn btn-info btn-lg" href="<?php echo site_url('Home'); ?>">Tambah Saldo</a>
							</li>
						</ul>
						<!-- Tombol Logout -->
						<div class="account pull-right">
							<a style="padding: 3px 5px; margin-right: 9px; width: 105px; height: 24px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a>
						</div>
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
							<li>
								<a href="<?php echo base_url("Home")?>">Home</a>					
							</li>															
							<li>
								<a href="<?php echo base_url("Profile")?>">Profil</a>
							</li>
							<li>
								<a href="<?php echo base_url("Kelola_barang")?>">Barang</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="<?php echo base_url("assets/img/GBP.jpg"); ?>" alt="Share-It-Up" >
			<?php foreach ($data as $x) { ?>
				<h4><span>Detail Barang</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<!-- <div class="span4" data-jcarousel="true">
								<a href="<?php echo base_url().$x['foto_barang'] ?>" data-colorbox-href="<?php echo base_url().$x['foto_barang'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1" onclick="return false;">
									<img itemprop="image" alt="" src="<?php echo base_url().$x['foto_barang'] ?>" xpreview="<?php echo base_url().$x['foto_barang'] ?>"></a>
							</div> -->

							<div id="myCarousel" class="carousel slide" data-ride="carousel">
    							<!-- Indicators -->
    							<ol class="carousel-indicators">
        							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        							<li data-target="#myCarousel" data-slide-to="1"></li>
        							<li data-target="#myCarousel" data-slide-to="2"></li>
    							</ol>

    							<!-- Wrapper for slides -->
    							<div class="carousel-inner" style="margin-left: 40px">
    								<?php if ($x['foto_barang2'|'foto_barang3']==NULL) {?>
        								<div class="item active">
            								<img src="<?php echo base_url().$x['foto_barang'] ?>" alt="">
        								</div>
        							<?php } else { ?>
        								<div class="item active">
            								<img src="<?php echo base_url().$x['foto_barang'] ?>" alt="">
        								</div>
        								<div class="item">
            								<img src="<?php echo base_url().$x['foto_barang2'] ?>" alt="">
        								</div>
        								<div class="item">
            								<img src="<?php echo base_url().$x['foto_barang3'] ?>" alt="">
        								</div>
        							<?php } } ?>
    							</div>

    							<!-- Controls -->
							    <a style="margin-left: 20px" class="left carousel-control" href="#myCarousel" data-slide="prev">
							        <span class="glyphicon glyphicon-chevron-left"></span>
							        <img src="<?php echo base_url()."assets/img/prev.png" ?>"> </span> <!-- Gmbr Previous -->
							    </a>
							    <a style="margin-right: 520px"class="right carousel-control" href="#myCarousel" data-slide="next">
							        <span class="glyphicon glyphicon-chevron-right"></span>
							        <img src="<?php echo base_url()."assets/img/next.png" ?>"> </span> <!-- Gmbr Next -->
							    </a>
							</div>

							<div class="span5" style="margin-left: 40px">
								<address>
									<strong>Nama Barang:</strong> <span><?php echo $x['nama_barang']; ?></span><br>
									<strong>Jenis:</strong> <span><?php echo $x['jenis']; ?></span><br>
									<strong>Pemilik:</strong> <span><a href="<?php echo base_url('Profile/profil_user?id_user=').$x['id_pemilik']; ?>"><?php echo $x['nama_user']; ?></a></span><br>
														
								</address>									
								
							</div>
							

							<?php if ($this->session->userdata('id_user')==$x['id_pemilik']) {?>
								<div class="span5" style="margin-left: 40px;margin-top: -15px">
								<a class="btn btn-warning btn-sm" href="<?php echo base_url('EditBarang/Edit/'.$x['id_barang']) ?>">Edit barang</a> </div>
							<?php } else { ?>	
							<div class="span5" style="margin-left: 40px">
								<form class="form-inline" action="<?php echo base_url('Barang_detail/pinjam_barang'); ?>" method="post" enctype='multipart/form-data'>
									<label class="checkbox">
										<input type="hidden" value="<?php echo $x['id_barang']; ?>" name='id_barang'>
										<p><label for="date" class="control-label">Pilih tanggal pengembalian</p></label>
									  	<div class="controls">
									  		<input id="date" type="date" value="" name="date" required> 
									  	</div>
									  	<br>
									  	<p><label for="dp" class="control-label">Harga DP Pinjam Barang</p>
									  	<div class="controls">
									  		<input id="dp" type="number" value="<?php echo $x['pinjam_dp_barang']; ?>" name="dp" readonly>
									  	</div>  
									  	<p>&nbsp;</p>
									  	<button class="btn btn-inverse" type="submit">Pinjam</button>
									</label>
									<br>
								</form>
							</div>	
							<?php } ?>		


						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $x['deskripsi_barang']; ?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							
						</div>
					</div>

					<div class="row feature_box">				
						<div class="span4">
							<div class="service">
								<div class="responsive" style="margin-top: 70px">	
									<img src="assets/themes/images/feature_img_2.png" alt="" />
									<h4>MODERN <strong>DESIGN</strong></h4>
									<p>Share It Up ini menggunakan design modern.</p>									
								</div>
							</div>
						</div>
						<div class="span4">	
							<div class="service">
								<div class="customize" style="margin-top: 70px">			
									<img src="assets/themes/images/feature_img_1.png" alt="" />
									<h4>FREE <strong>SHIPPING</strong></h4>
									<p>Share It Up ini mudah digunakan. Hanya pilih Barang yang ingin kamu pinjam dan klik pinjam!</p>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="service">
								<div class="support" style="margin-top: 70px">	
									<img src="assets/themes/images/feature_img_3.png" alt="" />
									<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
									<p>Share It Up ini live support selama 24jam.</p>
								</div>
							</div>
						</div>	
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
						<p class="logo"><img src="assets/img/logo2.png" style="margin-left:-11px;" class="site_logo" alt=""></p>
						<p>Share It Up ini menggunakan design modern.<br> Share It Up ini mudah digunakan. Hanya pilih Barang yang ingin kamu pinjam dan klik pinjam!<br> Share It Up ini live support selama 24jam.</p>
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
				<span>Copyright ©Share-It-Up 2018</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
		<script type="text/javascript">
			$('.carousel').carousel({
     			interval: 8000,
     			pause:true,
     			wrap:false
			});
		</script>
    </body>
</html>