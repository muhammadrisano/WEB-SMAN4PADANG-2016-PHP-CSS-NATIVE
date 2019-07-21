<?php
session_start();
include "koneksi.php";
error_reporting(0);

if( empty($_SESSION['username']) and empty($_SESSION['password']))
{include "index.php";}else {
?>

<html>
<head><title>Proses Pengimputan</title>
<head>
<body background="images/bakg.png">
<center>
<img src="images/Header.jpg" />
<h2>Anda Telah Mengimputkan Data </h2>
<hr/>




<?php

$no_pendaftaran=$_POST['no_pendaftaran'];
$asal_smp=$_POST['asal_smp'];



$query = "UPDATE pendaftaran SET asal_smp = '$asal_smp' WHERE no_pendaftaran = '$no_pendaftaran'" ;
$hasil = mysql_query($query);
if($hasil)
{
echo "<h3> Status : anda telah berhasil mengimput SMP !!!</h3>";
}else{
echo "<h3><font color=\"red\">Status : Anda gagal!! mengubah data</font><h3>";}
?>
<h3> <font color="blue">Langkah Selanjutnya <a href="inputsmp.php">Ulangi Pengimputan</a> atau <a href="selectrecord.php">Lihat data</a></font></h3>
</center>


</body>
</html>

<?php
}
?>