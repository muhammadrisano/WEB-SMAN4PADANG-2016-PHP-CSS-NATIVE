
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
<title>Pengimputan Online Nilai PPDB SMAN 4 PADANG</title>
</head>
<body background="images/bakg.png">
<center>
<img src="images/Header.jpg" />
<h2>Pendaftaran PPDB Mandiri SMAN 4 PADANG 2016/2017</h2>


<form action="prosesppdb.php" method="post">
<table width="491" border="0">
  <tr>
    <td width="210"><strong>Nomor Pendaftaran</strong></td>
    <td width="17">:</td>
    <td width="242"><label for="no_pendaftaran"></label>
      <input type="text" name="no_pendaftaran" id="no_pendaftaran" />
    </td>
  </tr>
  <tr>
    <td width="210"><strong>Nama Lengkap</strong></td>
    <td>:</td>
    <td><label for="nama_lengkap"></label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" size="30"/></td>
  </tr>
  <tr>
    <td width="210"><strong>NISN</strong></td>
    <td>:</td>
    <td><label for="nisn"></label>
    <input type="text" name="nisn" id="nisn" /></td>
  </tr>
  <tr>
    <td width="210"><strong>Bahasa Indonesia</strong></td>
    <td><dl></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 1</dd></td>
    <td>:</td>
    <td><label for="lap_bi_1"></label>
    <input type="text" name="lap_bi_1" id="lap_bi_1" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_bi_2"></label>
    <input type="text" name="lap_bi_2" id="lap_bi_2" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_bi_3"></label>
    <input type="text" name="lap_bi_3" id="lap_bi_3" size="4"/></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 4</td>
    <td>:</td>
    <td><label for="lap_bi_4"></label>
    <input type="text" name="lap_bi_4" id="lap_bi_4" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd> Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_bi_5"></label>
    <input type="text" name="lap_bi_5" id="lap_bi_5" size="4"/></td>
  </tr>
  <tr>
    <td width="210"><strong>Matematika</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 1</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_1"></label>
    <input type="text" name="lap_mtk_1" id="lap_mtk_1" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_2"></label>
    <input type="text" name="lap_mtk_2" id="lap_mtk_2" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_3"></label>
    <input type="text" name="lap_mtk_3" id="lap_mtk_3" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd> Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_4"></label>
    <input type="text" name="lap_mtk_4" id="lap_mtk_4" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 5</td>
    <td>:</td>
    <td><label for="lap_mtk_5"></label>
    <input type="text" name="lap_mtk_5" id="lap_mtk_5" size="4"/></td>
  </tr>
  <tr>
    <td width="210"><strong>Bahasa Inggris</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 1</dd></td>
    <td>:</td>
    <td><label for="lap_bing_1"></label>
    <input type="text" name="lap_bing_1" id="lap_bing_1" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_bing_2"></label>
    <input type="text" name="lap_bing_2" id="lap_bing_2" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_bing_3"></label>
    <input type="text" name="lap_bing_3" id="lap_bing_3" size="4" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_bing_4"></label>
    <input type="text" name="lap_bing_4" id="lap_bing_4" size="4" /></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_bing_5"></label>
    <input type="text" name="lap_bing_5" id="lap_bing_5" size="4" /></td>
  </tr>
  <tr>
    <td><strong>IPA</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><dd>Semester 1</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_1"></label>
    <input type="text" name="lap_ipa_1" id="lap_ipa_1" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_2"></label>
    <input type="text" name="lap_ipa_2" id="lap_ipa_2" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_3"></label>
    <input type="text" name="lap_ipa_3" id="lap_ipa_3" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_4"></label>
    <input type="text" name="lap_ipa_4" id="lap_ipa_4" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_5"></label>
    <input type="text" name="lap_ipa_5" id="lap_ipa_5" size="4" /></td>
  </tr>
  <tr>
    <td><strong>IPS</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><dd>Semester 1</dd></td>
    <td>:</td>
    <td><label for="lap_ips_1"></label>
    <input type="text" name="lap_ips_1" id="lap_ips_1" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_ips_2"></label>
    <input type="text" name="lap_ips_2" id="lap_ips_2" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_ips_3"></label>
    <input type="text" name="lap_ips_3" id="lap_ips_3" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_ips_4"></label>
    <input type="text" name="lap_ips_4" id="lap_ips_4" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_ips_5"></label>
    <input type="text" name="lap_ips_5" id="lap_ips_5" size="4"/></td>
  </tr>
  <tr>
    <td><strong>Sertifikat</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><dd>Nilai 1</dd></td>
    <td>:</td>
    <td><label for="sertifikat1"></label>
    <input type="text" name="sertifikat1" id="sertifikat1" size="4"/></td>
  </tr>
  <tr>
    <td><dd>Nilai 2</dd></td>
    <td>:</td>
    <td><label for="sertifikat2"></label>
    <input type="text" name="sertifikat2" id="sertifikat2" size="4" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 3</dd></td>
    <td>:</td>
    <td><label for="sertifikat3"></label>
    <input type="text" name="sertifikat3" id="sertifikat3" size="4" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 4</td>
    <td>:</td>
    <td><label for="sertifikat4"></label>
    <input type="text" name="sertifikat4" id="sertifikat4" size="4" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 5</dd></td>
    <td>:</td>
    <td><label for="sertifikat5"></label>
    <input type="text" name="sertifikat5" id="sertifikat5" size="4"/></td>
  </tr>
  <tr>
    <td><strong>Keterangan</strong></td>
    <td>:</td>
    <td><label for="ket"></label>
      <select name="ket" id="ket">
      <option selected="">-Pilih-</option>
      <option value="data lenkap"
>Data Lengkap</option>
<option value="data tidak lenkap"
>Data Tidak Lengkap</option>
</select></td>
  </tr>
  <tr>
    <td></dl></td>
    <td>&nbsp;</td>
    <td></td>
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
</body>
</html>
<?php
}
?>