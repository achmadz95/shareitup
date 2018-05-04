<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Profil Anda</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
				<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">      
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css"?> rel="stylesheet">		
		<link href=<?php echo base_url()."assets/themes/css/bootstrappage.css"?> rel="stylesheet"/>
		
		
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
				<div class="span4">
					<form method="POST" action="<?php echo base_url().'home/cari'?>">
						<input type="text" class="input-block-level search-query" Placeholder="eg. Nama / Jenis Barang">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
						<li><b>Hi, <?php echo $this->session->userdata('nama_user'); ?></b></li>
							<li><a style="padding: 3px 5px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="<?php echo base_url('assets/img/logo.png'); ?>" class="site_logo" alt="" style="width: 11%; height: 100%; margin-left:-10px;" ></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo base_url("Home")?>">Home</a>					
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul> -->
							</li>															
							<li><a href="<?php echo base_url("Profile")?>">Profil</a>
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul> -->								
							<li><a href="<?php echo base_url("Kelola_barang")?>">Barang</a>
								<!-- <ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul> -->
						</ul>
					</nav>
				</div>
			</section>							
			<!-- <section class="google_map">
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=74%2F6+Nguy%E1%BB%85n+V%C4%83n+Tho%E1%BA%A1i,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=74%2F6+Nguyen+Van+Thoai+Da+Nang,+Viet+Nam&amp;sll=37.0625,-95.677068&amp;sspn=41.546728,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=74+Nguy%E1%BB%85n+V%C4%83n+Tho%E1%BA%A1i,+Ng%C5%A9+H%C3%A0nh+S%C6%A1n,+Da+Nang,+Vietnam&amp;t=m&amp;ll=16.064537,108.24151&amp;spn=0.032992,0.039396&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
			</section> -->
			<?php foreach ($data as $x) { ?>


			<section class="header_text sub">
			<!-- <img class="pageBanner" src="<?php echo base_url("assets/img/GBP.jpg"); ?>" alt="Share-It-Up" > --><div class="col-md-12 ">
                                        <center>
                                            <a class="" >
                                                <img class="media-object dp img-circle" src="<?php echo base_url($x['foto_profil']); ?>" style="width: 180px;height:180px;">
                                            </a>
                                        </center>
                                        <h3><?php echo $x['nama_user']; ?></h3>
                                    </div> 
				<h4>My Profile</span></h4>
			</section>
			<!-- <section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="<?php echo $this->session->userdata('username'); ?>" >
				<h4><span>My Profile</span></h4>
			</section> -->
			<section class="main-content">				
				<div class="row">				
				
					<div class="span12"> 
						<center>
						<p>Nama Lengkap</p>
						<h4><?php echo $x['nama_user']; ?></h4>
						<p>Alamat</p>
						<h4><?php echo $x['alamat']; ?>, <?php echo $x['kecamatan']; ?>, <?php echo $x['kode_pos']; ?></h4>
						<p>Email</p>
						<h4><?php echo $x['email']; ?></h4>
						<p>Nomor Telpon</p>
						<h4><?php echo $x['no_telp']; ?></h4>
						<p>Tentang saya</p>
						<h4><?php echo $x['deskripsi']; ?></h4>
						<!-- Tombol untuk menampilkan modal-->
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Profil</button>
				
						<?php } ?>
						</form>

						</center>
						
					</div>
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- konten modal-->
							<div class="modal-content">
							<!-- heading modal -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Profil</h4>
							</div>
							<!-- body modal -->
							<form method="POST" action="<?php echo site_url()."/Profile/edit_profil/"; ?>" enctype='multipart/form-data'>
							<div class="modal-body">
								<div class="form-group">
		  							<label for="fotoprofil">Foto Profil</label>
		  							<input style="width: 500px;" type="file" class="form-control" name="image" value="<?php echo ($x['foto_profil']); ?>">
								</div><br>
								<div class="form-group"> 
		  							<label for="nama">Nama Lengkap</label>
		  							<textarea style="resize:none;width: 500px;" type="text" class="form-control" id="nama" name="nama" required=""><?php echo $x['nama_user']; ?></textarea>
								</div>
								<div class="form-group"> 
		  							<label for="alamat">Alamat</label>
		  							<input style="width: 500px;" type="text" class="form-control" id="alamat" name="alamat" required="" value="<?php echo $x['alamat']; ?>">
								</div>
								<div class="form-group"> 
		  							<label for="kecamatan">Kecamatan</label>
		  							<input style="width: 500px;" type="text" class="form-control" id="kecamatan" name="kecamatan" required="" value="<?php echo $x['kecamatan']; ?>">
								</div>
								<div class="form-group"> 
		  							<label for="kode_pos">Kode Pos</label>
		  							<input style="width: 500px;" type="text" class="form-control" id="kode_pos" name="kode_pos" required="" value="<?php echo $x['kode_pos']; ?>">
								</div>
								<div class="form-group"> 
		  							<label for="_no_telp">Nomor Telpon</label>
		  							<input style="width: 500px;" type="text" class="form-control" id="_no_telp" name="no_telp" required="" value="<?php echo $x['no_telp']; ?>">
								</div>
								<div class="form-group"> 
		  							<label for="deskripsi">Deskripsi</label>
		  							<input style="width: 500px;" type="text" class="form-control" id="deskripsi" name="deskripsi" required="" value="<?php echo $x['deskripsi']; ?>">
								</div><br>

							</div>
							<!-- footer modal -->
							<div class="modal-footer">
								<button type="submit" class="btn btn-default">Simpan</button>
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
							<li><a href="home">Login</a></li>  
							<li><a href="home">Register</a></li>
							<li><a href="home">Home</a></li>
							<li><a href="kelola_barang">Barang</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="profile">My Profile</a></li>
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
    </body>
</html>
