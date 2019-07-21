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
$nama_lengkap=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];

$lap_bi_1=$_POST['lap_bi_1'];
$lap_bi_2=$_POST['lap_bi_2'];
$lap_bi_3=$_POST['lap_bi_3'];
$lap_bi_4=$_POST['lap_bi_4'];
$lap_bi_5=$_POST['lap_bi_5'];
$rata_lap_bi=($lap_bi_1 + $lap_bi_2 + $lap_bi_3 + $lap_bi_4 + $lap_bi_5) / 5;

$lap_mtk_1=$_POST['lap_mtk_1'];
$lap_mtk_2=$_POST['lap_mtk_2'];
$lap_mtk_3=$_POST['lap_mtk_3'];
$lap_mtk_4=$_POST['lap_mtk_4'];
$lap_mtk_5=$_POST['lap_mtk_5'];
$rata_lap_mtk=($lap_mtk_1 + $lap_mtk_2 + $lap_mtk_3 + $lap_mtk_4 + $lap_mtk_5) / 5;

$lap_bing_1=$_POST['lap_bing_1'];
$lap_bing_2=$_POST['lap_bing_2'];
$lap_bing_3=$_POST['lap_bing_3'];
$lap_bing_4=$_POST['lap_bing_4'];
$lap_bing_5=$_POST['lap_bing_5'];
$rata_lap_bing =($lap_bing_1 + $lap_bing_2 + $lap_bing_3 + $lap_bing_4 + $lap_bing_5) / 5;

$lap_ipa_1=$_POST['lap_ipa_1'];
$lap_ipa_2=$_POST['lap_ipa_2'];
$lap_ipa_3=$_POST['lap_ipa_3'];
$lap_ipa_4=$_POST['lap_ipa_4'];
$lap_ipa_5=$_POST['lap_ipa_5'];
$rata_lap_ipa=($lap_ipa_1 + $lap_ipa_2 + $lap_ipa_3 + $lap_ipa_4 + $lap_ipa_5) / 5; 

$lap_ips_1=$_POST['lap_ips_1'];
$lap_ips_2=$_POST['lap_ips_2'];
$lap_ips_3=$_POST['lap_ips_3'];
$lap_ips_4=$_POST['lap_ips_4'];
$lap_ips_5=$_POST['lap_ips_5'];
$rata_lap_ips=($lap_ips_1 + $lap_ips_2 + $lap_ips_3 + $lap_ips_4 + $lap_ips_5) / 5;

$rata_lap_total = ($rata_lap_bi + $rata_lap_mtk + $rata_lap_bing + $rata_lap_ipa + $rata_lap_ips)/ 5;

$sertifikat1=$_POST['sertifikat1'];
$sertifikat2=$_POST['sertifikat2'];
$sertifikat3=$_POST['sertifikat3'];
$sertifikat4=$_POST['sertifikat4'];
$sertifikat5=$_POST['sertifikat5'];

$rata_sertifikat= $sertifikat1 + $sertifikat2 + $sertifikat3 + $sertifikat4 + $sertifikat5;
$ket=$_POST['ket'];


$query = "UPDATE pendaftaran SET nama_lengkap = '$nama_lengkap', nisn = '$nisn', lap_bi_1 = '$lap_bi_1', lap_bi_2 = '$lap_bi_2', lap_bi_3 = '$lap_bi_3', lap_bi_4 = '$lap_bi_4', lap_bi_5 = '$lap_bi_5', rata_lap_bi = '$rata_lap_bi', lap_mtk_1 = '$lap_mtk_1', lap_mtk_2 = '$lap_mtk_2', lap_mtk_3 = '$lap_mtk_3', lap_mtk_4 = '$lap_mtk_4', lap_mtk_5 = '$lap_mtk_5', rata_lap_mtk = '$rata_lap_mtk', lap_bing_1 = '$lap_bing_1', lap_bing_2 = '$lap_bing_2', lap_bing_3 = '$lap_bing_3', lap_bing_4 = '$lap_bing_4', lap_bing_5 = '$lap_bing_5', rata_lap_bing = '$rata_lap_bing', lap_ipa_1 = '$lap_ipa_1', lap_ipa_2 = '$lap_ipa_2', lap_ipa_3 = '$lap_ipa_3', lap_ipa_4 = '$lap_ipa_4', lap_ipa_5 = '$lap_ipa_5', rata_lap_ipa = '$rata_lap_ipa', lap_ips_1 = '$lap_ips_1', lap_ips_2 = '$lap_ips_2', lap_ips_3 = '$lap_ips_3', lap_ips_4 = '$lap_ips_4', lap_ips_5 = '$lap_ips_5', rata_lap_ips = '$rata_lap_ips', rata_lap_total = '$rata_lap_total', sertifikat1 = '$sertifikat1', sertifikat2 = '$sertifikat2', sertifikat3 = '$sertifikat3', sertifikat4 = '$sertifikat4', sertifikat5 = '$sertifikat5', rata_sertifikat = '$rata_sertifikat', ket = '$ket' WHERE no_pendaftaran = '$no_pendaftaran'" ;
$hasil = mysql_query($query);
if($hasil)
{
echo "<h3> Status : anda telah berhasil mengubah data</h3>";
}else{
echo "<h3><font color=\"red\">Status : Anda gagal!! mengubah data</font><h3>";}
?>
<h3> <font color="blue">Langkah Selanjutnya <a href="pendaftaran.php">Ulangi Pengimputan</a> atau <a href="selectrecord.php">Lihat data</a></font></h3>
</center>


</body>
</html>

<?php
}
?>