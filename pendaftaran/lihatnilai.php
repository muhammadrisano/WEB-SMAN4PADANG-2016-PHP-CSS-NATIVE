<?php
session_start();
include "koneksi.php";
error_reporting(0);

if( empty($_SESSION['username']) and empty($_SESSION['password']))
{include "index.php";}else {
$select="select * from pendaftaran order by rata_lap_total desc";
$select_query = mysql_query($select);
$t_siswa=mysql_num_rows($select_query);

?>



<html>
<head>

<title>Pengimputan Online Nilai PPDB SMAN 4 PADANG</title>
</head>
<body background="images/bakg.png">

<center>
<img src="images/Header.jpg" />
<h2>Daftar Calon PPDB Mandiri SMAN 4 PADANG 2016/2017</h2>
</center>

<strong>Total Siswa Terdaftar: <?php echo $t_siswa;?></strong>
<table color = "red" style="font-size:11px;font-family:'arial';text-align:center;" border='1' width="160%" align='center'>
<tr><th width="1%">Rank</th><th width="4%">No Pendaftaran</th><th width="8%">Nama Lengkap </th><th width="4%"> NISN </th><th width="2%"> BI SEM 1</th><th width="2%"> BI SEM 2</th><th width="2%"> BI SEM 3</th><th width="2%"> BI SEM 4</th><th width="2%"> BI SEM 5</th><th width="3%"> RATA2 BI SEM </th>    <th width="2%"> MTK SEM 1</th><th width="2%"> MTK SEM 2</th><th width="2%"> MTK SEM 3</th><th width="2%"> MTK SEM 4</th><th width="2%"> MTK SEM 5</th><th width="3%"> RATA2 MTK SEM</th>  <th width="2%"> BING SEM 1</th><th width="2%"> BING SEM 2</th><th width="2%"> BING SEM 3</th><th width="2%"> BING SEM 4</th><th width="2%"> BING SEM 5</th><th width="3%"> RATA2 BING</th>  <th width="2%">IPA SEM 1</th><th width="2%"> IPA SEM 2</th><th width="2%"> IPA SEM 3</th><th width="2%"> IPA SEM 4</th><th width="2%"> IPA SEM 5</th><th width="3%"> RATA2 IPA</th>  <th width="2%"> IPS SEM 1</th><th width="2%"> IPS SEM 2</th><th width="2%"> IPS SEM 3</th><th width="2%"> IPS SEM 4</th><th width="2%"> IPS SEM 5</th><th width="3%"> RATA2 IPS </th> <th width="4%"> RATA2 RAPOR </th> <th width="3%"> NILAI SERTIFIKAT </th></tr>
<?php
$no=1;
while($sr=mysql_fetch_array($select_query))
{
$no_pendaftaran = $sr['no_pendaftaran'];

$nama_lengkap = $sr['nama_lengkap'];
$nisn = $sr['nisn'];
$lap_bi_1 = $sr['lap_bi_1'];
$lap_bi_2 = $sr['lap_bi_2'];
$lap_bi_3 = $sr['lap_bi_3'];
$lap_bi_4 = $sr['lap_bi_4'];
$lap_bi_5 = $sr['lap_bi_5'];
$rata_lap_bi = $sr['rata_lap_bi'];
$lap_mtk_1 = $sr['lap_mtk_1'];
$lap_mtk_2 = $sr['lap_mtk_2'];
$lap_mtk_3 = $sr['lap_mtk_3'];
$lap_mtk_4 = $sr['lap_mtk_4'];
$lap_mtk_5 = $sr['lap_mtk_5'];
$rata_lap_mtk = $sr['rata_lap_mtk'];
$lap_bing_1 = $sr['lap_bing_1'];
$lap_bing_2 = $sr['lap_bing_2'];
$lap_bing_3 = $sr['lap_bing_3'];
$lap_bing_4 = $sr['lap_bing_4'];
$lap_bing_5 = $sr['lap_bing_5'];
$rata_lap_bing = $sr['rata_lap_bing'];
$lap_ipa_1 = $sr['lap_ipa_1'];
$lap_ipa_2 = $sr['lap_ipa_2'];
$lap_ipa_3 = $sr['lap_ipa_3'];
$lap_ipa_4 = $sr['lap_ipa_4'];
$lap_ipa_5 = $sr['lap_ipa_5'];
$rata_lap_ipa = $sr['rata_lap_ipa'];
$lap_ips_1 = $sr['lap_ips_1'];
$lap_ips_2 = $sr['lap_ips_2'];
$lap_ips_3 = $sr['lap_ips_3'];
$lap_ips_4 = $sr['lap_ips_4'];
$lap_ips_5 = $sr['lap_ips_5'];
$rata_lap_ips = $sr['rata_lap_ips'];
$rata_lap_total = $sr['rata_lap_total'];
$rata_sertifikat = $sr['rata_sertifikat'];


echo "<tr><td>$no</td><td>$no_pendaftaran</td><td>$nama_lengkap</td><td>$nisn</td><td>$lap_bi_1</td><td>$lap_bi_2</td><td>$lap_bi_3</td><td>$lap_bi_4</td><td>$lap_bi_5</td><td><strong>$rata_lap_bi</strong></td>    <td>$lap_mtk_1</td><td>$lap_mtk_2</td><td>$lap_mtk_3</td><td>$lap_mtk_4</td><td>$lap_mtk_5</td><td><strong>$rata_lap_mtk</strong></td>  <td>$lap_bing_1</td><td>$lap_bing_2</td><td>$lap_bing_3</td><td>$lap_bing_4</td><td>$lap_bing_5</td><td><strong>$rata_lap_bing</strong></td>  <td>$lap_ipa_1</td><td>$lap_ipa_2</td><td>$lap_ipa_3</td><td>$lap_ipa_4</td><td>$lap_ipa_5</td><td><strong>$rata_lap_ipa</strong></td>  <td>$lap_ips_1</td><td>$lap_ips_2</td><td>$lap_ips_3</td><td>$lap_ips_4</td><td>$lap_ips_5</td><td><strong>$rata_lap_ips </strong></td> <td><strong>$rata_lap_total </strong></td> <td><strong> $rata_sertifikat</strong> </td> 
</tr>";
$no++;
}
?>
</table>
<font align ="left" color="blue"><a href="home.php"><<-kembali Ke HOME </a>atau <a href="logout.php">Loguot</a> </font>
</body>
</html>
<?php
}
?>