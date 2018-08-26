<?php
session_start();
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
  session_destroy();
  header('location:index');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Muncak Bareng</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="bootstrap/css/sidebar.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid col-sm-4-fs">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">Muncak Bareng</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
     
    </ul>
  </div>
</nav>

<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>         
        <li ><a href="profile">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="jadwal">Jadwal Muncak Bareng<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon 
        glyphicon-tags"></span></a></li>
        <li ><a href="buat_jadwal">Buat Jadwal<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
        <li ><a href="logout">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
  <div class="col-sm-9"><h2>Muncak Bareng</h2>
  <?php
  if(!isset($_SESSION['nama']));
  
  echo "Selamat Datang ".$_SESSION['nama']."";
  ?>
  </div>
	</body>
	</html>