<?php
session_start();
include 'koneksi.php';
$ip       = $_SERVER['REMOTE_ADDR'];
 
if(!empty($_POST)){
     
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' and password='$password'");

    $cek = mysqli_num_rows($sql);
        if($cek > 0){
            $_SESSION ['isLoggedIn']=1;
            $_SESSION['nama'] = $cek['nama'];
            $_SESSION['Id'] = $cek['Id'];
            header("location:home");
        }else{
        ?>
        <script language="JavaScript">
            alert('Username & Password Salah');
            document.location='index';
        </script>
        <?php
        }

        $log = mysqli_query($koneksi,"INSERT INTO user_log_ppdb (email,tanggal_akses,ip) VALUES ('$email',NOW(),'$ip')");
        }else{
            echo '<script language="javascript">
            alert("Username Atau Password Salah");
            location.href="index";
            </script>';
            exit();
        }
?>