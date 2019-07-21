<?php
session_start();
include "koneksi.php";
error_reporting(0);

if( empty($_SESSION['username']) and empty($_SESSION['password']))
{include "index.php";}else {
$select="select * from pendaftaran order by rata_lap_total desc";
$select_query = mysql_query($select);

?>



<html>
<head>

<title>Pengimputan Online Nilai PPDB SMAN 4 PADANG</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<style type="text/css">
.huruf {
	font-size: 16px;
}
#tes {
	font-size: 16px;
}
</style>
</head>
<body background="images/bakg.png">

<center>
<img src="images/Header.jpg" />
<h2>Aplikasi PPDB Mandiri SMAN 4 PADANG 2016/2017</h2>

<table width="234" height="199" border="2"bordercolor="#CC0000"align="center">
  <tr>
    <td align="center"><strong>PILIH MENU</strong></td>
    </tr>
  <tr>
    <td align="center"><ul id="MenuBar1" class="MenuBarVertical">
      <li><a class="MenuBarItemSubmenu" href="#">Input Data</a>
        <ul>
          <li><a href="pendaftaran.php">Nilai Rapor & Sertifikat</a></li>
          <li><a href="inputsmp.php">imput smp</a></li>
          <li><a href="#">Nilai Tes Akademik</a></li>
          </ul>
        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Lihat Data</a>
        <ul>
          <li><a href="lihatnilai.php">Nilai Rapor & Sertifikat</a></li>
          <li><a href="#">Nilai Tes Akademik</a></li>
          <li><a href="#">Ranking Keseluruhan</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Edit Data</a>
        <ul>
          <li><a href="selectrecord.php">Nilai Rapor &amp; Sertifikat</a></li>
          <li><a href="#">Nilai Tes Akademik</a></li>
        </ul>
      </li>
      <li><a href="#">Daftar Ulang</a>    </li>
      <li><a href="logout.php">Logout</a></li>
</ul></td>
  </tr>
</table>
<p><strong></strong></p>

<p>&nbsp;</p>



</center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
}
?>