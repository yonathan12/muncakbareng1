<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Muncak Bareng</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style>
		body {
			padding-top: 70px;
		}
		</style>
	</head>
	<body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index">Muncak Bareng</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#home" class="active page-scroll">Home</a></li>
                    <!-- <li><a href="#artikel" class="page-scroll">Artikel</a></li> -->             
                    <li><a href="#gallery" class="page-scroll">Gallery</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
                </div>
            </div>
        </nav>
		<div class="container">
  <div id="home" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#home" data-slide-to="0" class="active"></li>
      <li data-target="#home" data-slide-to="1"></li>
      <li data-target="#home" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/merbabu.jpg" alt="Los Angeles" style="width:auto; height: auto;">
      </div>

      <div class="item">
        <img src="img/merbabu.jpg" alt="Chicago" style="width:auto; height: auto;">
      </div>
    
      <div class="item">
        <img src="img/merbabu.jpg" alt="New york" style="width:auto; height: auto;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#home" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#home" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>

    <!-- gallery -->
    <section class="gallery" id="gallery">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center" >
                        <h2>Gallery</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="" class="thumbnail">
                            <img src="img/merbabu-min.jpg">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="thumbnail">
                            <img src="img/Merapi-min.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="thumbnail">
                            <img src="img/slamet1-min.jpg">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="thumbnail">
                            <img src="img/merapi2-min.jpg">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="thumbnail">
                            <img src="img/1-min.jpg">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="thumbnail">
                            <img src="img/2-min.jpg">
                        </a>
                    </div>

                </div>
        </div>
    </section>
    <!-- Akhir gallery -->

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Akhir About -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright 2017 | built with <i class=""></i> by. <a href="#">Yonathan Rizky</a.></p>
                </div>
            </div>
            <div class="col-sm-12">
                <a href="" class="btn btn-primary">Subscribe</a>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <script type="text/javascript">
    $(function(){
        $('.page-scroll').on('click', function(e){
            $target = $(this.hash);

            $jarak = 45;
            $('html, body').stop().animate(
                {
                    'scrollTop' : $target.offset().top - $jarak
                },
                500, //durasi dalam milisekon
                'swing', //efek transisi (opsi : swing / linear)
                function(){
                    window.location.hash = target;
                }
            );
        });
    });
</script>
</html>