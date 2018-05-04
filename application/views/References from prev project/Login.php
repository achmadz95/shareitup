<!DOCTYPE html>
<html>
<head>
	<title>Futsal.in : Log In</title>
 <link href=<?php echo base_url()."assets/css/bootstrap.css"?> rel="stylesheet">

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
    <!--<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      
        </div>
       
      </div>
    </div> -->

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1><img src=<?php echo base_url()."assets/img/futsalin.png"?>></h1>
					
				</div>
				 <div class="grid" style="width:50%; margin: 0 auto;">
    <h1 style="color: white; text-align: center;">Log In</h1>
        <form action="<?php echo base_url()."index.php/Login/aksi_login"; ?>" method="POST" class="form login">
        
          
<div class="row">
                	<div class="col-md-4 col-xs-4">
                    <h4 style="color: white; text-align: center ;"><strong>Username</strong></h4>
                    </div> 

                    <div class="col-md-4 col-xs-4 form-group">

                       <input name="username" class="form-control " type="text" placeholder="username" required>
                    </div> 
                </div>
</br> 
                <div class="row">
                	<div class="col-md-4 col-xs-4">
                     <h4 style="color: white; text-align: center;"><strong>Password</strong></h4>
                    </div>
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="password" class="form-control " type="password" placeholder="password" required>
                    </div> 
                </div>
                <input name="submit" class="btn btn-sub" type="submit" value="Login">
        </form>
<div><?php echo $this-> session->flashdata('pesan');?></div>
		 
		</div>
    </div>
    
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

    <link rel="stylesheet" href="<?php echo base_url()."assets/css/login-style.css" ?>" type="text/css">

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universal - All In 1 Template</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href=<?php echo base_url()."css/animate.css"?>` rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href=<?php echo base_url()."css/style.default.css"?> rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href=<?php echo base_url()."css/custom.css"?> rel="stylesheet">

   <body>
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
<div id="footerwrap2">
    
   </div><! --/footerwrap -->

  

</body>
</html>