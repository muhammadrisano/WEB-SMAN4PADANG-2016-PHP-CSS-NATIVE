<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMA NEGERI 4 PADANG</title>




<link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<?php
include "koneksi.php";
session_start();
?>
<div id="main">

	<div id="header">
		<img src="../images/tes.png" />
	</div>

<!-- menu atas -->

 
 
	<div id="menu-atas">
		
    </div>
<!--menu kiri -->
	<div id="menu-kiri">
    	<div id="bg-menu"><table border="0" align="center" ><tr><td colspan="2"> MENU</td></tr></table>
        </div>
        <div id="conten-menu">
        <center>
        <img src="../images/kepala-sekolah.jpg" width="180"/>
        </center>
  
        </div>
		
        <div id="bg-menu"><table border="0"><tr><td><img src="../images/logokecil.png" /></td><td> LOGOUT</td></tr></table>
        </div>
        <div id="conten-menu">
        LOGOUT
        </div>
		-->
       
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
	

<div class="clear">
</div>

<img src="../images/bawah.jpg" />


    
</div>
    



</body>
</html>
