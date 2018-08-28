<?php
session_start();
include 'koneksi.php';
$ip       = $_SERVER['REMOTE_ADDR'];
 
     
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' and password='$password'");

    if (mysqli_num_rows($sql) > 0 ) {
        $cek = mysqli_fetch_array($sql);
            $_SESSION ['isLoggedIn']=1;
            $_SESSION['nama'] = $cek['nama'];
            $_SESSION['Id'] = $cek['Id'];
            header("location:home");
    } else {
        ?>
        <script language="JavaScript">
            alert('Username & Password Salah');
            document.location='index';
        </script>
        <?php
        }
?>