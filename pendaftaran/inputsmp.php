
<?php
session_start();
include "koneksi.php";
error_reporting(0);

if( empty($_SESSION['username']) and empty($_SESSION['password']))
{include "index.php";}else {
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pengimputan Asal Tempat Sekolah !!</title>
</head>
<body background="images/bakg.png">
<center>
<img src="images/Header.jpg" />
<h2>Pendaftaran PPDB Mandiri SMAN 4 PADANG 2016/2017</h2>


<form action="updatesmp.php" method="post">
<table width="491" border="0">
  <tr>
    <td width="210"><strong>Nomor Pendaftaran</strong></td>
    <td width="17">:</td>
    <td width="242"><label for="no_pendaftaran"></label>
      <input type="text" name="no_pendaftaran" id="no_pendaftaran" />
    </td>
  </tr>
  <tr>
    <td width="210"><strong>TEMPAT SMP</strong></td>
    <td>:</td>
    <td><label for="asal_smp"></label>
    <input type="text" name="asal_smp" id="asal_smp" size="30"/></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" value="simpan" /><input type="reset" /></td>
  </tr>
  
</table>
</form>

</center>
<font align ="left" color="blue"><a href="home.php"><<-kembali Ke HOME </a>atau <a href="logout.php">Loguot</a> </font>
</center>
</body>
</html>
<?php
}
?>