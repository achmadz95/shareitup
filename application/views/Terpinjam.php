<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-up! : List Barang</title>
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
					<a href=<?php echo base_url().""?> class="logo pull-left"><img src="<?php echo base_url('assets/img/logo.png'); ?>" class="site_logo" alt="" style="margin-left:-10px; width:11%;height:11%;"></a>
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
								</li>							
							<li><a href="<?php echo base_url("Kelola_barang")?>">Barang</a>
								<!-- <ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul> -->
								</li>
						</ul>
					</nav>
				</div>
			</section>							
			
			<section class="header_text sub">
			<!--<img class="pageBanner" src="themes/images/pageBanner.png" alt="<?php echo $this->session->userdata('username'); ?>" >-->
				<h4><span>BARANG YANG SAYA PINJAM</span></h4>
			</section>
			<?=anchor('Post', 
                        'Post Barang', 
                        ['class'=>'btn btn-primary btn-sm'])?>

              <a class="btn btn-default btn-sm" href="<?php echo base_url('Kelola_barang'); ?>">Barang milik saya</a>

			<table id="kpplshareitupTable" class="table table-striped table bordered table-hover">   

            <thead>
              <tr>
                <th>Nama Barang</th>
                <th></th>
                <th>Jenis Barang</th>
                <th>Pemilik</th>
                <th>Tanggal Dipinjam</th>
                <th>Deadline Dikembalikan</th>
              </tr>
            </thead>

            <tbody>
            
               
            
                <?php 
              foreach($data as $row)
              {	?>

              	<tr>
              		<td><?php echo $row['nama_barang']; ?></td>
              		<td><img src=" <?php echo base_url(
                $row['foto_barang']); ?> " width="150" height="150"></td>
                	<td><?php echo $row['jenis']; ?></td>
                	<td><?php if ($row['nama_user']==null) {echo '-'; ?><td>-</td><td>-</td> <?php } 
                else { ?> <a href=" <?php echo base_url('Profile/profil_user?id_user=').$row['id_user']; ?> "> <?php echo $row['nama_user']; ?> </a></td>
                	<td><?php echo $row['tgl_dipinjam']; ?></td>
                	<td><?php echo $row['tgl_dikembalikan']; ?></td>

                	<td>  </td>

              <td> <?php if ($row['dikembalikan']==0 && $row['dipinjam']==1) { ?> 
              	<form action="<?php echo base_url('Kelola_barang/kembalikan_barang'); ?>" method="post"> <input type="hidden" value="<?php echo $row['id_barang']; ?>" name='id_barang'> 

               	<button class="btn btn-basic" type="submit">Kembalikan</button>
               </form><?php } else {echo 'Sudah dikembalikan';} ?></td> 
              <?php 


          } }  ?>
               
            

            </tbody>
          </table>
          </div>
      <div class="col-md-3"></div>
    </div>
    
    <script>
      $(document).ready(function()
      {
           $('#kpplshareitupTable').DataTable();
      });
    </script>

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
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>
