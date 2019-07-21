<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMA NEGERI 4 PADANG | WEBSITE REMSI SMAN 4 PADANG</title>




<link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<?php
include "koneksi.php";
session_start();
?>
<div id="main">

	<div id="header">
		<img src="images/tes.png" />
	</div>

<!-- menu atas -->

 
 
	<div id="menu-atas">
		<li> <a href="index.php"> Home</a></li>
    	<li> <a href="#"> Profil Sekolah</a>
			<ul>
    			<li><a href="index.php?p=profil_sambuatankepalasekolah">Sambutan Kepala Sekolah</a></li>
    			<li><a href="index.php?p=profil_visimisi">visi & Misi</a></li>
                <li><a href="index.php?p=profil_sarana">Sarana, Prasarana & Denah</a></li>
                <li><a href="index.php?p=profil_tujuan">Tujuan & Sasaran Program</a></li>
                <li><a href="index.php?p=profil_strukturorganisasi">Struktur Organisasi</a></li>
                <li><a href="#22">Sumber Daya Manusia</a></li>
                <li><a href="#22">Mars SMAN 4 Padang</a></li>
                <li><a href="index.php?p=profil_lokasisekolah">Lokasi Sekolah</a></li>
                
                 
    		</ul>
        </li>
    	
    <li><a href="#11">Guru & TU</a>
    		<ul>
    			<li><a href="#11">Direktori Guru</a></li>
                <li><a href="#22">Perestasi Guru</a></li>
                <li><a href="#22">Silabus</a></li>
                <li><a href="#22">Materi Ajar</a></li>
                <li><a href="#22">Kalender Akademik</a></li>        
    		</ul>
        </li>
    <li><a href="#22">Siswa</a>
    		<ul>
    			<li><a href="#11">Direktori Siswa</a></li>
                <li><a href="#22">Prestasi Siswa</a></li>
                <li><a href="#22">Ektrakurikuler</a></li>
                <li><a href="#22">Beasiswa</a></li>
                <li><a href="#22">Diterima di Perguruan Tinggi</a></li>  
                      
    		</ul>
        </li>
    <li><a href="#11">Alumni</a>
    <ul>
    			<li><a href="#11">Direktori Alumni</a></li>
    			<li><a href="#22">Info Alumni</a></li>
                  
                      
    		</ul>
        </li>
    <li><a href="#22">Fitur</a>
    <ul>
    			<li><a href="#11">Agenda</a></li>
    			<li><a href="#22">Info Sekolah</a></li>
                <li><a href="#22">Berita</a></li>     
    		</ul>
    </li>
    <li><a href="#11">Media Online</a>
        <ul>
    			<li><a href="#11">E-Mading</a></li>
    			<li><a href="#22">PPDB Mandiri</a></li>
                <li><a href="#22">E-Learnig</a></li>   
                <li><a href="#22">E-Library</a></li>       
    		</ul>
    </li>
    <li><a href="#11">Buku Tamu</a></li>
    <li><a href="#22">Pengumuman</a></li>
    <li><a href="#11">Contact US</a></li>

  
    </div>
<!--menu kiri -->
	<div id="menu-kiri">
    	<div id="bg-menu"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> KEPALA SEKOLAH</td></tr></table>
        </div>
        <div id="conten-menu">
        <center>
        <img src="images/kepala-sekolah.jpg" width="180"/>
        </center>
  
        </div>
		<!-- masih pending
        <div id="bg-menu"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> TATA TERTIP SEKOLAH</td></tr></table>
        </div>
        <div id="conten-menu">
        <p>teasdfasdf dsafsadf dsf sdafsdaf </p>
        </div>
		-->
        <div id="bg-menu"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> FAVORIT</td></tr></table>
        </div>
        <div id="conten-menu">
        <ul>
        	<li><a href="http://sman4padang.schoolmedia.id">SCHOOL MEDIA </a></li>
            <li><a href="http://sman4padang.sch.id/e-learning/login/index.php">E-LEARNING</a></li>
            <li><a href="http://data.dikdasmen.kemdikbud.go.id">DAPODIK</a></li>
            
        </div>
	</div> 
	
    
<!-- Manu Tengah -->
	 <?php
						  
		$pages_dir = 'pages';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
 
			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/home.php');
		}
		?>          
<!-- menu kanan -->
	<div id="menu-kanan">
   		
        
    	<div id="bg-menu"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> KONTAK SEKOLAH</td></tr></table>
        </div>
        <div id="conten-menu">
        <table width="230" border="0">
        <tr>
          <td width="55">T<strong>elp :</strong></td></tr>
        <tr><td width="55">(0751) 71361</td></tr>
        <tr>
          <td width="55"><strong>Email :</strong></td></tr>
        <tr><td width="55">smaempatpadang@yahoo.com</td></tr>
        <tr>
          <td width="55"><strong>Alamat :</strong></td></tr>
        <tr><td width="55">Jl. Linggar Jati No. 1 Kelurahan Lubuk Begalung, Kecamatan Lubuk Begalung, Padang Sumatera Barat</td></tr>
  
        </table>
      </div>
        <div id="bg-menu"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> LOGIN MEMBER</td></tr></table>
        </div>
        <div id="conten-menu">
        <table border="0">
        <form action="index.php?p=loginaksi" method="post" name="login" enctype="multipart/form-data">
        <tr><td>Nama</td><td>:</td><td><input type="text" name="username" placeholder="username"/></td></tr>
        <tr><td>Password</td><td>:</td><td><input type="password" name="password" placeholder="******" title="tolong isi password" required/></td></tr>
        <tr><td></td><td></td><td><input type="submit" name="login" value="Login" /><input type="reset" value="Batal" /></td></tr>
        </form>
        </table>
        </div>
        
        <div id="bg-menu"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> INFORMASI LAINNYA</td></tr></table>
        </div>
        <div id="conten-menu">
        <p>belum tersedia </p>
        </div>
        
    </div>

<div class="clear">
</div>

<img src="images/bawah.jpg" />


    
</div>
    



</body>
</html>
