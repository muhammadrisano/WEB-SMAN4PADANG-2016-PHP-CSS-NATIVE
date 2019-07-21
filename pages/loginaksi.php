<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$login =mysql_query("SELECT * FROM user_guru WHERE username='$username' AND password='$password'");

$hasil=mysql_num_rows($login);
$r=mysql_fetch_array($login);


if($hasil>0){
    
    $_SESSION['user_id'] = $r['user_id'];
    $_SESSION['username']=$r['username'];
    $_SEESION['password']=$r['password'];
    $_SESSION['nama_lengkap']=$r['nama_lengkap'];
    $_SESSION['email']=$r['email'];
    $x= session_id();
    ?>
<div id="menu-tengah">
    	<div id="bg-menut"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> Lokasi Sekolah</td></tr></table>
        </div>
  <div id="conten-menut">
<br><br><br><center> Anda berhasil login !! <br> Silahkan Cek <a href='userguru/index.php' target='_blank'>Account</a>Anda</center>
</div>

</div>
<?php

   
    mysql_query("update user set status = '1' WHERE username = '$_POST[username]'");
}
else
{
    echo "<script> window.alert('Maaf Anda belum punya accont disini atau Akun anda belum dikomfirmasi Admin. Silahkan Contact Admin dengan mengisi form komantar');
    window.location=('index.php')</script>";

}
    





?>