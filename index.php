<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Muncak Bareng</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="jQuery/jquery-3.2.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<style>
		body {
			padding-top: 70px;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					 <a href="index" class="navbar-brand page-scroll">Muncak Bareng</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-2">
					<ul class="nav navbar-nav">
					<li><a href="#home" class="active page-scroll">Home</a></li>				
                    <li><a href="#gallery" class="page-scroll">Gallery</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</body>

	<!-- jumbotron -->
    <div class="jumbotron text-center" id="home">
        <h1>Muncak Bareng</h1>
        <p>Climbing | Adventure | Survival</p>
    </div>
    

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