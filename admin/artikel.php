<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Muncak Bareng</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../DataTables/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="../DataTables/css/fixedColumns.bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../DataTables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../DataTables/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="../DataTables/js/dataTables.fixedColumns.min.js"></script>
        <style>
        body {
            padding-top: 70px;
        }
         a:link {
        text-decoration:none;

       }
        </style>

        <script>
            $(document).ready(function() {
            $('#artikel').DataTable();
            } );
        </script>
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
                    <li><a href="index" class="active page-scroll">Home</a></li>
                    <li><a href="artikel" class="page-scroll">Artikel</a></li>             
                    <li><a href="#" class="page-scroll">Gallery</a></li>
                    <li><a href="#" class="page-scroll">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                </div>
            </div>
        </nav>
	<div class="container">
        <h2 class="text-center">Artikel</h2>
		<a href="buat_artikel" class="btn btn-success">Tambah Artikel</a>
            <br><br>
                <div class="table-responsive">
                    <table class="table" id="artikel">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include '../koneksi.php';
                                $sql = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY tgl_buat DESC");
                                $no = 1;
                                while ($post = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $post['judul']; ?></td>
                                <td><?php echo $post['penulis']; ?></td>
                                <td><?php echo $post['status']; ?></td>
                                <td><?php echo $post['tgl_buat']; ?></td>
                                <td><a href="view_artikel.php?id=<?php echo $post['Id']; ?>" class="glyphicon glyphicon-tasks"></a>&nbsp<a href="" class="glyphicon glyphicon-pencil"></a>&nbsp<a href="hapus_artikel.php?id=<?php echo $post['Id']; ?>" onclick="return confirm('Anda Yakin ?');" class="glyphicon glyphicon-remove"></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>                    
                </div>            
	   </div>
	</body>
</html>