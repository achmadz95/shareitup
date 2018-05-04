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
					<form method="POST" action="<?php echo base_url().'Home/cari'?>">
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
				<h4><span>BARANG SAYA</span></h4>
			</section>
			<?=anchor('post', 
                        'Post Barang', 
                        ['class'=>'btn btn-primary btn-sm'])?>

             <a class="btn btn-default btn-sm" href="<?php echo base_url('Kelola_barang/borrowed'); ?>">Barang yang saya pinjam</a>

			<table id="kpplshareitupTable" class="table table-striped table bordered table-hover">   

            <thead>
              <tr>
                <th>Nama Barang</th>
                <th></th>
                <th>Jenis Barang</th>
                <th>Peminjam</th>
                <th>Tanggal Dipinjam</th>
                <th>Deadline Dikembalikan</th>
                <th>Status</th>
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
                	<td><?php if ($row['nama_user']==null) {echo '-'; ?><td>-</td><td>-</td><td>-</td> <?php } 
                else { ?> <a href=" <?php echo base_url('Profile/profil_user?id_user=').$row['id_user']; ?> "> <?php echo $row['nama_user']; ?> </a></td>
                	<td><?php echo date ('d-m-Y',strtotime($row['tgl_dipinjam'])); ?></td>
                	<td><?php echo date ('d-m-Y',strtotime($row['tgl_dikembalikan'])); ?></td>
                	<td><?php if ($row['dipinjam']==1 && $row['dikembalikan']==0) {echo 'Sedang dipinjam';}
                	else {echo 'Sudah dikembalikan';} }
                	 ?></td>
                	 <td>  </td>
                	 <td><a class="btn btn-warning btn-sm" href="<?php echo base_url('EditBarang/Edit/').$row['id_barang']; ?>">Edit</a>
                	 <a class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/Post/deleteBarang/').$row['id_barang']; ?>">Delete</a></td>
                	
              <?php 


           }  ?>
              <!--  <td>  </td>
             <?php 
                echo '<td class="crud-actions">  
                  <a href="'.base_url()."EditBarang/Edit/".$row['id_barang'].'" class="btn btn-warning btn-sm">Edit</a>  
                  <a href="'.base_url()."index.php/Post/deleteBarang/".$row['id_barang'].'" class="btn btn-danger btn-sm">Delete</a>
                </td>';
                echo '</tr>';
             ?>   -->

            </tbody>
          </table>
      
    
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
