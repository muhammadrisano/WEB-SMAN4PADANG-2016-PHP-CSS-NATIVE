<html>
<head>
<title>PPDB SMAN 4 PADANG</title>
</head>
<body background="images/bakg.png">
<center>
<img src="images/Header.jpg" />

<h2 align="center"> PENERIMAAN PESERTA DIDIK BARU SMAN 4 PADANG </H2>
<hr/>
<?php

include "koneksi.php";
$no_pendaftaran =$_POST['no_pendaftaran'];
$select = "select * from pendaftaran where no_pendaftaran = '$no_pendaftaran'";
$select_query = mysql_query($select);
$t_siswa=mysql_num_rows($select_query);
if($t_siswa == 1){
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
		$lap_mtk_1 = $sr['lap_mtk_1'];
		$lap_mtk_2 = $sr['lap_mtk_2'];
		$lap_mtk_3 = $sr['lap_mtk_3'];
		$lap_mtk_4 = $sr['lap_mtk_4'];
		$lap_mtk_5 = $sr['lap_mtk_5'];
		$lap_bing_1 = $sr['lap_bing_1'];
		$lap_bing_2 = $sr['lap_bing_2'];
		$lap_bing_3 = $sr['lap_bing_3'];
		$lap_bing_4 = $sr['lap_bing_4'];
		$lap_bing_5 = $sr['lap_bing_5'];
		$lap_ipa_1 = $sr['lap_ipa_1'];
		$lap_ipa_2 = $sr['lap_ipa_2'];
		$lap_ipa_3 = $sr['lap_ipa_3'];
		$lap_ipa_4 = $sr['lap_ipa_4'];
		$lap_ipa_5 = $sr['lap_ipa_5'];
		$lap_ips_1 = $sr['lap_ips_1'];
		$lap_ips_2 = $sr['lap_ips_2'];
		$lap_ips_3 = $sr['lap_ips_3'];
		$lap_ips_4 = $sr['lap_ips_4'];
		$lap_ips_5 = $sr['lap_ips_5'];
		$rata_lap_total = $sr['rata_lap_total'];
		$rata_sertifikat = $sr['rata_sertifikat'];
?>
<h2 align="center"> Selamat Anda Lulus Seleksi Administrasi !!!</h2>
<p><Font size="3" color="red">* Tanda terima Berkas Pendaftaran yang diberikan pada saat memasukan berkas di jadikan sebagai kartu ujian pada tes akademik berikutnya.</Font></p>
<p><font color="red" size="3">* Denah dan Ruang ujian tes akademik Dapat dilihat di sekolah pada tanggal 13 mei 2016 pulul 16.00 WIB</font></p>
<p><font color="red" size="3">* Lapor Asli sudah didapat diambil di ruang IV (Verifikasi) setelah Tes akademik Selesai</font></p>
<p><font color="red" size="3">* Pada Saat mengikuti Ujian Tes Akademik Wajib memakai seragam sekolah SMP masing-masing</font></p>
<p align="center">JADWAL TEST  AKADEMIK DILAKSANAKAN PADA:<br>
  HARI/TANGGAL : SABTU/14 MEI 2016<br>
  PUKUL : 07.30 s.d. 11.00 WIB</p>
<table width="491" border="0">
  <tr>
    <td width="210"><strong>Nomor Pendaftaran</strong></td>
    <td width="17">:</td>
    <td width="242"><?php echo $no_pendaftaran;?>
    </td>
  </tr>
  <tr>
    <td width="210"><strong>Nama Lengkap</strong></td>
    <td>:</td>
    <td><?php echo $nama_lengkap;?></td>
  </tr>
  <tr>
    <td width="210"><strong>NISN</strong></td>
    <td>:</td>
    <td><?php echo $nisn;?></td>
  </tr>
  <tr>
    <td width="210"><strong>Bahasa Indonesia</strong></td>
    <td><dl></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 1</dd></td>
    <td>:</td>
    <td><?php echo $lap_bi_1;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><?php echo $lap_bi_2;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><?php echo $lap_bi_3;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 4</td>
    <td>:</td>
    <td><?php echo $lap_bi_4;?></td>
  </tr>
  <tr>
    <td width="210"><dd> Semester 5</dd></td>
    <td>:</td>
    <td><?php echo $lap_bi_5;?></td>
  </tr>
  <tr>
    <td width="210"><strong>Matematika</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 1</dd></td>
    <td>:</td>
    <td><?php echo $lap_mtk_1;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><?php echo $lap_mtk_2;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><?php echo $lap_mtk_3;?></td>
  </tr>
  <tr>
    <td width="210"><dd> Semester 4</dd></td>
    <td>:</td>
    <td><?php echo $lap_mtk_4;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 5</td>
    <td>:</td>
    <td><?php echo $lap_mtk_5;?></td>
  </tr>
  <tr>
    <td width="210"><strong>Bahasa Inggris</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 1</dd></td>
    <td>:</td>
    <td><?php echo $lap_bing_1;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 2</dd></td>
    <td>:</td>
    <td><?php echo $lap_bing_2;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 3</dd></td>
    <td>:</td>
    <td><?php echo $lap_bing_3;?></td>
  </tr>
  <tr>
    <td width="210"><dd>Semester 4</dd></td>
    <td>:</td>
    <td><?php echo $lap_bing_4;?></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><?php echo $lap_bing_5;?></td>
  </tr>
  <tr>
    <td><strong>IPA</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><dd>Semester 1</dd></td>
    <td>:</td>
    <td><?php echo $lap_ipa_1;?></td>
  </tr>
  <tr>
    <td><dd>Semester 2</dd></td>
    <td>:</td>
    <td><?php echo $lap_ipa_2;?></td>
  </tr>
  <tr>
    <td><dd>Semester 3</dd></td>
    <td>:</td>
    <td><?php echo $lap_ipa_3;?></td>
  </tr>
  <tr>
    <td><dd>Semester 4</dd></td>
    <td>:</td>
    <td><?php echo $lap_ipa_4;?></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><?php echo $lap_ipa_5;?></td>
  </tr>
  <tr>
    <td><strong>IPS</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><dd>Semester 1</dd></td>
    <td>:</td>
    <td><?php echo $lap_ips_1;?></td>
  </tr>
  <tr>
    <td><dd>Semester 2</dd></td>
    <td>:</td>
    <td><?php echo $lap_ips_2;?></td>
  </tr>
  <tr>
    <td><dd>Semester 3</dd></td>
    <td>:</td>
    <td><?php echo $lap_ips_3;?></td>
  </tr>
  <tr>
    <td><dd>Semester 4</dd></td>
    <td>:</td>
    <td><?php echo $lap_ips_4;?></td>
  </tr>
  <tr>
    <td><dd>Semester 5</dd></td>
    <td>:</td>
    <td><?php echo $lap_ips_5;?></td>
  </tr>
  
  <tr>
    <td><strong>Nilai Setifikat</dd></td>
    <td>:</td>
    <td><?php echo $rata_sertifikat;?></td>
  </tr>
   <tr>
    <td><dd>&nbsp;</dd></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td><dd><strong>Rata-rata Rapor</strong></dd></td>
    <td><strong>:</strong></td>
    <td><strong><?php echo $rata_lap_total;?></strong></td>
  </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" align="center"></td>
    </tr>
</table>
  <?php
  }
  }else{
  echo "<strong><font color=\"red\">*MAAF ANDA TIDAK LULUS ADMINISTRASI !!!<br/>";
  echo "*Untuk Pengambilan Lapor Sudah Bisa Diambil di Ruang IV (Verifikasi)</font></strong>";
  }
  ?>
  <br/><a href="index.php"><<= Kembali</a>
</center>
<p>&nbsp;</p>
</body>
</html>