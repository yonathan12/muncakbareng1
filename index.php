<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Muncak Bareng</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Muncak Bareng</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#article">Article</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                       <a data-toggle="modal" data-target="#myModal">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Muncak Bareng</h1>
                <hr>
                <p>MuncakBareng.com adalah sebuah situs portal web yang berisi Artikel - Artikel tentang kegiatan outdoor khususnya naik gunung dan bisa mencari pendakian bersama, agar bisa menambah teman, komunitas atau lainnya</p>
                <a href="#gallery" class="btn btn-primary btn-xl page-scroll">Lihat Kami</a>
            </div>
        </div>
    </header>

    
   
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center">
                    <h2 class="section-heading">Article</h2>
                    <hr class="primary">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 text-left">
                            <div class="service-box">
                                 <?php
                                       require 'koneksi.php';
                                       $status = 'Y';
                                       $data = mysqli_query($koneksi,"SELECT * FROM artikel WHERE status='$status' ORDER BY tgl_buat ASC LIMIT 3")or die(mysql_error());
                                       while($hasil = mysqli_fetch_array($data)){
                                        ?>
                                        
                                       
                                <!-- <i class="fa fa-4x fa-map-signs text-primary sr-icons"></i> -->
                                <a href="" class="text-muted"><h3><?php echo $hasil['judul']; ?></h3></a>
                                <!-- <p class="text-muted">Our templates are updated regularly so they don't break.</p> -->
                                <?php } ?>
                            </div>
                        </div><!-- 
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <i class="fa fa-4x fa fa-map-o text-primary sr-icons"></i>
                                <h3>Pendakian Gn Merbabu</h3>
                                <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <i class="fa fa-4x fa-map-signs text-primary sr-icons"></i>
                                <h3>Pendakian Gn Merapi</h3>
                                <p class="text-muted">We update dependencies to keep things fresh.</p>
                            </div>
                        </div> -->
                    </div>                    
                </div>
            <br/>
                <div class="col-lg-3">
                    <h3 class="section-heading text-center">Jadwal Muncak Bareng</h3>
                    <hr class="primary">
                    <div class="row">
                        <div class=" text-left">
                            <div class="service-box">
                        <?php
                       require 'koneksi.php';
                       $status = 'TRUE';
                       $data = mysqli_query($koneksi,"SELECT * FROM jadwal WHERE status='$status' ORDER BY tanggal_naik ASC LIMIT 6")or die(mysql_error());
                       while($hasil = mysqli_fetch_array($data)){
                        ?>
                        <p class="text-muted"><?php echo $hasil['gn_tujuan']?>, <?php echo date('d F Y', strtotime($hasil['tanggal_naik']));  ?></p>
                       <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="gallery">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpeg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpeg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

   <!--  <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside> -->

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">MuncakBareng.com</h2>
                    <hr class="light">
                    <p class="text-faded">Muncak Bareng.com adalah sebuah situs portal web yang berisi Artikel - Artikel tentang kegiatan outdoor khususnya naik gunung dan bisa mencari pendakian bersama, agar bisa menambah teman, komunitas atau lainnya</p>
                    <a href="login" class="page-scroll btn btn-default btn-xl sr-button">Ayooo Join !!!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Ingin Mengisi Artikel Di MuncakBareng.com ???</h2>
                    <hr class="primary">
                    <p>Hi, untuk kalian yang tertarik dan berminat untuk membuat artikel di MuncakBareng.com silahkan menghubungi admin ya, gratis tidak ada syarat apapun. </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>0856-8490-753</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:yonathan@yonathanrizky.com">admin@muncakbareng.com</a></p>
                </div>
            </div>
        </div>
    </section>

     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">MuncakBareng.com</h4>
        </div>
        <!-- Form awal -->
        <form method="post" action="cek_login" class="form-signin" role="form">

          <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="email" class="form-control" name="email" required oninvalid="this.setCustomValidity('Email tidak boleh kosong')"oninput="setCustomValidity('')" placeholder="Masukan Email" autofocus="">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" required="" maxlength="35" oninvalid="this.setCustomValidity('Maaf kolom tidak boleh kosong')"oninput="setCustomValidity('')" placeholder="Kata Sandi">
            </div>
              <br>
            <div class="text-left">
              <a href="registrasi"">Belum Punya Akun ?</a>
            </div>
              <br>
            <tr>
              <td>
                <button class="btn btn-lg btn-primary btn-block btn-login" type="submit" value="login">Login</button>
              </td>
              <td><a href="index" class="btn btn-lg btn-primary btn-block btn-danger">Batal</a></td>
            </tr>
        </form>
        <!-- Akhir Form -->
      </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
      </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
