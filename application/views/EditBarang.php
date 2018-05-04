<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Barang</title>
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
    <!--[if lt IE 9]>     
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
    <body>


    
    <div id="top-bar" class="container">
      <div class="row">
        <div class="span4">
          <form method="POST" class="search_form">
            
          </form>
        </div>
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">
              <li><b>Hi, <?php echo $this->session->userdata('nama_user'); ?></b>   </li> 
              
                
              <li><a style="padding: 3px 5px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a></li>   
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div id="wrapper" class="container">
      <section class="navbar main-menu">
        <div class="navbar-inner main-menu">        
          <a href=<?php echo base_url().""?> ><img src="<?php echo base_url('assets/img/logo.png'); ?> " style="width: 11%; height: 100%; margin-left:-10px;"/></a>

          <nav id="menu" class="pull-right">
            
          </nav>
        </div>
      </section>
      <section class="header_text sub">
      <div class="card-body">
          <div class="table-responsive">
          <h1><b>Edit Barang</b></h1>
          
          <?php foreach($barang as $u){ ?>
          <form action="<?php echo base_url(). 'EditBarang/update'; ?>" method="post" enctype='multipart/form-data'> <!-- INI PENTING UNTUK BUAT UPLOAD -->
          <table style="margin:40px auto;">
            <tr>
             <td><label style="margin-top: 12px; margin-left: 50px"><b><h4>Nama Barang</h4></b></label></td>
              <td>
                <input type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
                <input style="margin-left: 75px; width:280px;margin-top: 15px" type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>">
              </td>
            </tr>
            <tr>
              <td><label style="margin-top: 12px; margin-left: 50px"><b><h4>Jenis Barang</h4></b></label></td>
              <td><input style="margin-top: 15px" type="text" name="jenis" value="<?php echo $u->jenis ?>"></td>
            </tr>
            <tr>
              <td><label style="margin-top: 12px; margin-left: 50px"><b><h4>Deskripsi Barang</h4></b></label></td>
              <td><textarea style="resize:none; margin-top: 15px; margin-right: -309px; height: 100px; width: 515px;" type="text" class="form-control" id="nama" name="deskripsi_barang" required=""><?php echo $u->deskripsi_barang ?></textarea></td>
            </tr>
            <tr>
            <tr>
              <td><label style="margin-top: 32px; margin-left: 50px"><b><h4>Upload Foto Barang</h4></b></label></td>
              <td><input style="margin-top: 30px; margin-left: 21px" type="file" class="form-control" name="image" value="<?php echo $u->foto_barang?>"></td>
            </tr>
              <td></td>
              <td><input style="width:225px;height:50px;margin-top: 50px" type="submit" value="Simpan"></td>
              <td><button style="width:225px;height:50px;margin-top: 50px" onclick="window.history.go(-1); return false;" >Cancel</button></td>
            </tr>
          </table>
        </form> 
        <?php } ?>
            </table>
          </div>
        </div>
      