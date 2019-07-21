<?php
session_start();
include "koneksi.php";
error_reporting(0);

if( empty($_SESSION['username']) and empty($_SESSION['password']))
{include "index.php";}else {
$action = strtolower($_POST['action']);
$no_pendaftaran=$_REQUEST['no_pendaftaran'];

if ($action == "delete")
{
	echo "<h2 align=\"center\">anda memilih aksi delete pada record $no_pendaftaran </h2><br/>";
	$delete = "delete from pendaftaran where no_pendaftaran = '$no_pendaftaran'";
	$delete_query = mysql_query($delete);
	if ($delete_query)
	{ 
	echo "<h3 align=\"center\">record $no_pendaftaran berhasil dihapus ... </h3><br/>";
	echo "<h3 align=\"center\"><a href=\"selectrecord.php\"><<< Kembali ke tabel</a> atau <a href=\"home.php\">ke menu HOME >>></a></h3>";
	}else{ 
	echo "<h3 align=\"center\" color=\"red\">Gagal menghapus record</h3>";
	}
}
else
{
$select = "select * from pendaftaran where no_pendaftaran = '$no_pendaftaran'";
$select_query = mysql_query($select);

while ($sr = mysql_fetch_array($select_query))
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
		$sertifikat1 = $sr['sertifikat1'];
		$sertifikat2 = $sr['sertifikat2'];
		$sertifikat3 = $sr['sertifikat3'];
		$sertifikat4 = $sr['sertifikat4'];
		$sertifikat5 = $sr['sertifikat5'];
		$rata_sertifikat = $sr['rata_sertifikat'];
		$ket = $sr['ket'];

?>
<html>
<head>
<title>Form Login</title>
</head>
<body background="images/bakg.png">
<center>
<img src="images/Header.jpg" />
<h3 align="center"> UPDATE DATA PENERIMAAN PESERTA DIDIK BARU SMAN 4 PADANG</H3>


<form action="update.php" method="post">
<table width="491" border="0">
  <tr>
    <td width="210"><strong>Nomor Pendaftaran</strong></td>
    <td width="17">:</td>
    <td width="242"><label for="no_pendaftaran"></label>
      <input type="text" name="no_pendaftaran" id="no_pendaftaran" value="<?php echo $no_pendaftaran;?>" />
    </td>
  </tr>
  <tr>
    <td width="210"><strong>Nama Lengkap</strong></td>
    <td>:</td>
    <td><label for="nama_lengkap"></label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" size="30" value="<?php echo $nama_lengkap;?>" /></td>
  </tr>
  <tr>
    <td width="210"><strong>NISN</strong></td>
    <td>:</td>
    <td><label for="nisn"></label>
    <input type="text" name="nisn" id="nisn" value="<?php echo $nisn;?>" /></td>
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
    <input type="text" name="lap_bi_1" id="lap_bi_1" size="4" value="<?php echo $lap_bi_1;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_bi_2"></label>
    <input type="text" name="lap_bi_2" id="lap_bi_2" size="4" value="<?php echo $lap_bi_2;?>"/></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_bi_3"></label>
    <input type="text" name="lap_bi_3" id="lap_bi_3" size="4" value="<?php echo $lap_bi_3;?>"/></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 4</td>
    <td>:</td>
    <td><label for="lap_bi_4"></label>
    <input type="text" name="lap_bi_4" id="lap_bi_4" size="4" value="<?php echo $lap_bi_4;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd> Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_bi_5"></label>
    <input type="text" name="lap_bi_5" id="lap_bi_5" size="4" value="<?php echo $lap_bi_5;?>" /></td>
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
    <input type="text" name="lap_mtk_1" id="lap_mtk_1" size="4" value="<?php echo $lap_mtk_1;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_2"></label>
    <input type="text" name="lap_mtk_2" id="lap_mtk_2" size="4" value="<?php echo $lap_mtk_2;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_3"></label>
    <input type="text" name="lap_mtk_3" id="lap_mtk_3" size="4" value="<?php echo $lap_mtk_3;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd> Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_mtk_4"></label>
    <input type="text" name="lap_mtk_4" id="lap_mtk_4" size="4" value="<?php echo $lap_mtk_4;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 5</td>
    <td>:</td>
    <td><label for="lap_mtk_5"></label>
    <input type="text" name="lap_mtk_5" id="lap_mtk_5" size="4" value="<?php echo $lap_mtk_5;?>" /></td>
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
    <input type="text" name="lap_bing_1" id="lap_bing_1" size="4" value="<?php echo $lap_bing_1;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_bing_2"></label>
    <input type="text" name="lap_bing_2" id="lap_bing_2" size="4" value="<?php echo $lap_bing_2;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_bing_3"></label>
    <input type="text" name="lap_bing_3" id="lap_bing_3" size="4" value="<?php echo $lap_bing_3;?>" /></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_bing_4"></label>
    <input type="text" name="lap_bing_4" id="lap_bing_4" size="4" value="<?php echo $lap_bing_4;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_bing_5"></label>
    <input type="text" name="lap_bing_5" id="lap_bing_5" size="4" value="<?php echo $lap_bing_5;?>" /></td>
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
    <input type="text" name="lap_ipa_1" id="lap_ipa_1" size="4" value="<?php echo $lap_ipa_1;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_2"></label>
    <input type="text" name="lap_ipa_2" id="lap_ipa_2" size="4" value="<?php echo $lap_ipa_2;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_3"></label>
    <input type="text" name="lap_ipa_3" id="lap_ipa_3" size="4" value="<?php echo $lap_ipa_3;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_4"></label>
    <input type="text" name="lap_ipa_4" id="lap_ipa_4" size="4" value="<?php echo $lap_ipa_4;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_ipa_5"></label>
    <input type="text" name="lap_ipa_5" id="lap_ipa_5" size="4" value="<?php echo $lap_ipa_5;?>" /></td>
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
    <input type="text" name="lap_ips_1" id="lap_ips_1" size="4" value="<?php echo $lap_ips_1;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 2</dd></td>
    <td>:</td>
    <td><label for="lap_ips_2"></label>
    <input type="text" name="lap_ips_2" id="lap_ips_2" size="4" value="<?php echo $lap_ips_2;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 3</dd></td>
    <td>:</td>
    <td><label for="lap_ips_3"></label>
    <input type="text" name="lap_ips_3" id="lap_ips_3" size="4" value="<?php echo $lap_ips_3;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 4</dd></td>
    <td>:</td>
    <td><label for="lap_ips_4"></label>
    <input type="text" name="lap_ips_4" id="lap_ips_4" size="4" value="<?php echo $lap_ips_4;?>" /></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><label for="lap_ips_5"></label>
    <input type="text" name="lap_ips_5" id="lap_ips_5" size="4" value="<?php echo $lap_ips_5;?>" /></td>
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
    <input type="text" name="sertifikat1" id="sertifikat1" size="4" value="<?php echo $sertifikat1;?>" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 2</dd></td>
    <td>:</td>
    <td><label for="sertifikat2"></label>
    <input type="text" name="sertifikat2" id="sertifikat2" size="4" value="<?php echo $sertifikat2;?>" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 3</dd></td>
    <td>:</td>
    <td><label for="sertifikat3"></label>
    <input type="text" name="sertifikat3" id="sertifikat3" size="4" value="<?php echo $sertifikat3;?>" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 4</td>
    <td>:</td>
    <td><label for="sertifikat4"></label>
    <input type="text" name="sertifikat4" id="sertifikat4" size="4" value="<?php echo $sertifikat4;?>" /></td>
  </tr>
  <tr>
    <td><dd>Nilai 5</dd></td>
    <td>:</td>
    <td><label for="sertifikat5"></label>
    <input type="text" name="sertifikat5" id="sertifikat5" size="4" value="<?php echo $sertifikat5;?>" /></td>
  </tr>
  <tr>
    <td><strong>Keterangan</strong></td>
    <td>:</td>
    <td><label for="ket"></label>
		<select name="ket" id="ket">
		<option value="<?php echo $ket;?>" selected><?php echo $ket;?></option>
		<option value="data lenkap">Data Lengkap</option>
		<option value="data tidak lenkap">Data Tidak Lengkap</option>
		</select>
	</td>
  </tr>
  <tr>
    <td></dl></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br/><input type="submit" name="kirim" value="update" /></td>
  </tr>
</table>
</form>
</center>
<a href="selectrecord.php"><<< kembali </a><br/>

 
</body>
</html>


<?php
}
	}
}
?>