<html>
<head>
<title>PPDB SMAN 4 PADANG</title>
</head>
<body background="images/bakg.png">
<center>
<img src="images/Header.jpg" />

<h2 align="center">  NILAI UN SMAN 4 PADANG TAHUN 2016 </H2>
<hr/>
<?php

include "koneksi.php";
include "koneksi.php";
$no_peserta =$_POST['no_peserta'];
$jurusan=$_POST['jurusan'];
if($jurusan == "ipa"){

								$select = "select * from nilaisman4 where no_peserta = '$no_peserta'";
								$select_query = mysql_query($select);
								$t_siswa=mysql_num_rows($select_query);
								if($t_siswa == 1){
								while ($sr = mysql_fetch_array($select_query))
									{
										$no_peserta = $sr['no_peserta'];
										$nama = $sr['nama'];
										$bin = $sr['bin'];
										$ing = $sr['ing'];
										$mat = $sr['mat'];
										$fis = $sr['fis'];
										$kim= $sr['kim'];
										$bio = $sr['bio'];
										$jumlah= $sr['jumlah'];
										$rata= $sr['rata'];
										$ket = $sr['ket'];
								?>
								<h3 align="center"> SELAMAT ANDA LULUS !!!</H3>
								
								<br/>
								<br/>
								<table width="491" border="0">
								  <tr>
									<td width="210"><strong>Nomor Peserta</strong></td>
									<td width="17">:</td>
									<td width="242"><?php echo $no_peserta;?>
									</td>
								  </tr>
								  <tr>
									<td width="210"><strong>Nama Peserta</strong></td>
									<td>:</td>
									<td><?php echo $nama;?></td>
								  </tr>
								     <tr>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
								   </tr>
								  <tr>
									<td width="210"><strong>Bahasa Indonesia</strong></td>
									<td>:</td>
									<td><?php 
									if($bin >= 55){
									echo $bin;}else{echo "<font color=\"red\">".$bin." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Bahasa Inggris</strong></td>
									<td>:</td>
									<td><?php 
									if($ing >= 55){
									echo $ing;}else{echo "<font color=\"red\">".$ing." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Matematika</strong></td>
									<td>:</td>
									<td><?php 
									if($mat >= 55){
									echo $mat;}else{echo "<font color=\"red\">".$mat." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Fisika</strong></td>
									<td>:</td>
									<td><?php 
									if($fis >= 55){
									echo $fis;}else{echo "<font color=\"red\">".$fis." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Kimia</strong></td>
									<td>:</td>
									<td><?php 
									if($kim >= 55){
									echo $kim;}else{echo "<font color=\"red\">".$kim." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Biologi</strong></td>
									<td>:</td>
									<td><?php 
									if($bio >= 55){
									echo $bio;}else{echo "<font color=\"red\">".$bio." ==> Remedial</font>";}
									?></td>
								  </tr>
								     <tr>
									 <td><hr/></td>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
								   </tr>
								   <tr>
									<td width="210"><strong>Jumlah</strong></td>
									<td>:</td>
									<td><strong><?php echo $jumlah;?></strong></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Rata-rata</strong></td>
									<td>:</td>
									<td><strong><?php echo $rata;?></strong></td>
								  </tr>
								     <tr>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
								   </tr>
								   <tr>
									<td width="210"><strong>Keterangan</strong></td>
									<td>:</td>
									<td><strong><?php echo $ket;?></strong></td>
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
								  <br/>
								  <font size="2" color="red">*JIKA NILAI ANDA REMEDIAL ATAU KURANG DARI "55" <br/>
								  MAKA DIANJURKAN UNTUK MENGULANG PADA BULAN OKTOBER DAN MENDAFTAR KEPADA WALI KELASNYA MASING-MASING </font><BR/><br/>
								  <?php
								  }
								  }else{
								  echo "<strong><font color=\"red\">MAAF DATA YANG ANDA MASUKAN SALAH SILAKAN ULANGI LAGI</font></strong><br/>";
								  }
								  
								  
}else if($jurusan == "ips"){

								$select = "select * from nilaisman4ips where no_peserta = '$no_peserta'";
								$select_query = mysql_query($select);
								$t_siswa=mysql_num_rows($select_query);
								if($t_siswa == 1){
								while ($sr = mysql_fetch_array($select_query))
									{
										$no_peserta = $sr['no_peserta'];
										$nama = $sr['nama'];
										$bin = $sr['bin'];
										$ing = $sr['ing'];
										$mat = $sr['mat'];
										$eko = $sr['eko'];
										$sos= $sr['sos'];
										$geo = $sr['geo'];
										$jumlah= $sr['jumlah'];
										$rata= $sr['rata'];
										$ket = $sr['ket'];
								?>
								<h3 align="center"> SELAMAT ANDA LULUS !!!</H3>
								
								<br/>
								<br/>
								<table width="491" border="0">
								  <tr>
									<td width="210"><strong>Nomor Peserta</strong></td>
									<td width="17">:</td>
									<td width="242"><?php echo $no_peserta;?>
									</td>
								  </tr>
								  <tr>
									<td width="210"><strong>Nama Peserta</strong></td>
									<td>:</td>
									<td><?php echo $nama;?></td>
								  </tr>
								   <tr>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
								   </tr>
								  <tr>
									<td width="210"><strong>Bahasa Indonesia</strong></td>
									<td>:</td>
									<td><?php 
									if($bin >= 55){
									echo $bin;}else{echo "<font color=\"red\">".$bin." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Bahasa Inggris</strong></td>
									<td>:</td>
									<td><?php 
									if($ing >= 55){
									echo $ing;}else{echo "<font color=\"red\">".$ing." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Matematika</strong></td>
									<td>:</td>
									<td><?php 
									if($mat >= 55){
									echo $mat;}else{echo "<font color=\"red\">".$mat." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Ekonomi</strong></td>
									<td>:</td>
									<td><?php 
									if($eko >= 55){
									echo $eko;}else{echo "<font color=\"red\">".$eko." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Sosiologi</strong></td>
									<td>:</td>
									<td><?php 
									if($sos >= 55){
									echo $sos;}else{echo "<font color=\"red\">".$sos." ==> Remedial</font>";}
									?></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Geografi</strong></td>
									<td>:</td>
									<td><?php 
									if($geo >= 55){
									echo $geo;}else{echo "<font color=\"red\">".$geo." ==> Remedial</font>";}
									?></td>
								  </tr>
								  <tr>
									 <td><hr/></td>
									 <td>&nbsp;</td>
									 <td>&nbsp;</td>
								   </tr>
								   <tr>
									<td width="210"><strong>Jumlah</strong></td>
									<td>:</td>
									<td><strong><?php echo $jumlah;?></strong></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Rata-rata</strong></td>
									<td>:</td>
									<td><strong><?php echo $rata;?></strong></td>
								  </tr>
								   <tr>
									<td width="210"><strong>Keterangan</strong></td>
									<td>:</td>
									<td><strong><?php echo $ket;?></strong></td>
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
								  <br/>
								  <font size="2" color="red">*JIKA NILAI ANDA REMEDIAL ATAU KURANG DARI "55" <br/>
								  MAKA DIANJURKAN UNTUK MENGULANG PADA BULAN OKTOBER DAN MENDAFTAR KEPADA WALI KELASNYA MASING-MASING </font><BR/><br/>
								  <?php
								  }
								  }else{
						 echo "<strong><font color=\"red\">MAAF DATA YANG ANDA MASUKAN SALAH SILAKAN ULANGI LAGI</font></strong><br/>";
			
								  }
								  
								  
}						  
								  
								  
								  
								  
								  
								  
								  
								  
  ?>
  <a href="index.php"><<= Kembali</a>
</center>
<p>&nbsp;</p>
</body>
</html>