<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>FUTSAL.in</title>

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url()."assets/css/bootstrap.css"?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/panel.css"?> rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href=<?php echo base_url()."assets/css/style.css"?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/font-awesome.min.css"?> rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=<?php echo base_url()."../../assets/js/ie8-responsive-file-warning.js"?>></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src=<?php echo base_url()."assets/js/modernizr.js"?>></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" ><img src=<?php echo base_url()."assets/img/futsalin1.png"?>></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href=<?php echo site_url()."/Home"?>>HOME</a></li>
            <li><a href="">BOOKING</a></li>
            <li class="active"><a href=<?php echo site_url()."/Profil"?>>PROFIL</a></li>
            <li><a href=<?php echo site_url("Logout")?>>LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->

	 <?php foreach($data as $x) { ?>
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1><strong>PROFIL</strong></h1>
							 <div class="col-md-12 ">
                                        <center>
                                            <a class="" href="<?php echo base_url($x['image']); ?>">
                                                <img class="media-object dp img-circle" src="<?php echo base_url($x['image']); ?>" style="width: 180px;height:180px;">
                                            </a>
                                        </center>
                                        <h3><?php echo $x['nama_pjg']; ?></h3>
                                    </div>
				</div>
				<div class="col-lg-8 col-lg-offset-2 himg">
				
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	
	<!-- 
-->

	 <!--Pulling Awesome Font -->
 <link href="" rel="stylesheet">
   
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                           
                            <div class="panel-body text-left">
                                <div class="row">
                                   
                                    <div class="col-md-12">
                                    	
                                        <h2> </h2>
                                        <p><i><?php echo $x['quote']; ?></i></p>
                                        <p>
                                            <i class="glyphicon glyphicon-home"></i> <?php echo $x['alamat_user']; ?> <br>
                                            <i class="glyphicon glyphicon-file"></i> <?php echo $x['ttl_user']; ?> <br>
                                             <i class="glyphicon glyphicon-phone"></i> <?php echo $x['phone_user']; ?><br><br>
                                             <i class=""></i> <?php echo $x['deskripsi']; ?>

                                              <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="IdFooter" class="panel-footer text-right">

<a class="btn btn-default" href="#" data-toggle="modal" data-target="#EditModal"><?php  ?>Edit</a>

                               <!--  <ul class="social-network social-circle">
                                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="https://www.facebook.com/blood.pssus" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://lk.linkedin.com/pub/sachitha-seram/85/a2a/618" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                <div class="col-md-4"></div>
                </div>
        </div>
    </div>
	
<div id="EditModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Profil</h4>
      </div>
      <form method="POST" action="<?php echo site_url()."/Profil/edit_profil/"; ?>" enctype='multipart/form-data'>
      <div class="modal-body">
        <div class="form-group"> 
		  <label for="comment">Quote</label>
		  <textarea type="text" class="form-control" name="quote" required=""><?php echo $x['quote']; ?></textarea>
		</div>
        <div class="form-group">
		  <label for="comment">Alamat</label>
		  <input type="text" class="form-control" name="alamat_user" required="" value="<?php echo $x['alamat_user']; ?>">
		</div>
        <div class="form-group">
		  <label for="comment">Tanggal Lahir</label>
		  <input type="text" class="form-control" name="ttl_user" required="" value="<?php echo $x['ttl_user']; ?>">
		</div>	
			<div class="form-group">
		  <label for="comment">Nomor Telepon</label>
		  <input type="text" class="form-control" name="phone_user" required=""  value="<?php echo $x['phone_user']; ?>">
		  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
		</div>
        <div class="form-group">
		  <label for="comment">Deskripsi</label>
		  <textarea type="text" class="form-control" name="deskripsi" required="" ><?php echo $x['deskripsi']; ?></textarea>
		  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
		</div>					
		<div class="form-group">
		  <label for="comment">Gambar</label>
		  <input type="file" name="image">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Kirim</button>
      </div>
      </form>
    </div>

  </div>
</div>


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>About</h4>
		 			<div class="hline-w"></div>
		 			<p>Website ini didirikan pada tahun 2017 oleh Tim Mahasiswa Sistem Informasi,
 ITS Surabaya.</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="www.google.com"><i class="fa fa-dribbble"></i></a>
		 				<a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
		 				<a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
		 				<a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
		 				<a href="www.tumblr.com"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Our Bunker</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Jalan Raya ITS,<br/>
		 				Gedung Sistem Informasi<br/>
		 				Sukolilo, Keputih, 60111<br/>
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src=<?php echo base_url()."assets/js/bootstrap.min.js"?>></script>
	<script src=<?php echo base_url()."assets/js/retina-1.1.0.js"?>></script>
	<script src=<?php echo base_url()."assets/js/jquery.hoverdir.js"?>></script>
	<script src=<?php echo base_url()."assets/js/jquery.hoverex.min.js"?>></script>
	<script src=<?php echo base_url()."assets/js/jquery.prettyPhoto.js"?>></script>
  	<script src=<?php echo base_url()."assets/js/jquery.isotope.min.js"?>></script>
  	<script src=<?php echo base_url()."assets/js/custom.js"?>></script>


    <script>
// Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';
		
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
				
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());
		
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}
				
		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});
		
		function getColumnNumber() { 
			var winWidth = $(window).width(), 
			columnNumber = 1;
		
			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
				return columnNumber;
			}       
			
			function setColumns() {
				var winWidth = $(window).width(), 
				columnNumber = getColumnNumber(), 
				itemWidth = Math.floor(winWidth / columnNumber);
				
				$container.find('.portfolio-item').each(function() { 
					$(this).css( { 
					width : itemWidth + 'px' 
				});
			});
		}
		
		function setPortfolio() { 
			setColumns();
			$container.isotope('reLayout');
		}
			
		$container.imagesLoaded(function () { 
			setPortfolio();
		});
		
		$(window).on('resize', function () { 
		setPortfolio();          
	});
})(jQuery);
</script>
  </body>
</html>