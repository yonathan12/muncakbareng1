<!DOCTYPE html>
<head>
<title>Membuat galeri gambar dinamis dengan PHP, jQuery &amp; MySQL - Codingan.com</title>
<!-- library CSS fancybox -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<!-- library JS -->
<script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- library JS fancybox -->
<script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>

<style type="text/css">
.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
</style>
</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=735461323279579";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
	<h1>Membuat galeri gambar dinamis dengan PHP, jQuery &amp; MySQL</h1>
    <div class="gallery">
        <?php
        //Menyertakan file konfigurasi database
        include('konfigDb.php');

        //mengambil gambar dari database
        $query = $db->query("SELECT * FROM gambar ORDER BY diupload DESC");

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'gambar/thumb/'.$row["nama_file"];
                $imageURL = 'gambar/'.$row["nama_file"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $row["judul"]; ?>" >
                <img src="<?php echo $imageThumbURL; ?>" alt="" />
            </a>
        <?php }
        } ?>
        <div style="display:block;margin-top:20px;" class="fb-like" data-href="https://www.facebook.com/codingan" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
    </div>
</div>
</body>
</html>
