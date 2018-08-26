<?php
session_start();
include 'koneksi.php';
$ip       = $_SERVER['REMOTE_ADDR'];
 
if(!empty($_POST)){
     
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = mysql_query("SELECT * FROM user WHERE email='$email' and password='$password'");
        if(mysql_num_rows($sql)){
            $cek = mysql_fetch_array($sql);
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

            $log = mysql_query("INSERT INTO user_log_ppdb (email,tanggal_akses,ip) VALUES ('$email',NOW(),'$ip')")  or die (mysql_error());
            //$logupdate = mysql_query("UPDATE user_log SET lastlogin='NOW()' WHERE username=$username") or die (mysql_error());
             
        }else{
           echo '<script language="javascript">
             alert("Username Atau Password Salah");
             location.href="index";
                </script>';
                exit();
              }
?>