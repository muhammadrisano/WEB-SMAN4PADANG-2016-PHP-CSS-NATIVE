<div id="menu-tengah">
    	<div id="bg-menut"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> GALERI</td></tr></table>
      
  </div>
        <div id="conten-menut">

<div id=slidercontainer>
  <div id=css3slider>
    <img src="http://www.nyekrip.com/demo/cara-membuat-slideshow-dengan-css3/square-tailed-kite.jpg" alt="Square-tailed kite">
	<img src="http://www.nyekrip.com/demo/cara-membuat-slideshow-dengan-css3/white-tailed-kite.jpg" alt="White-tailed kite">
	<img src="http://www.nyekrip.com/demo/cara-membuat-slideshow-dengan-css3/hawk.jpg" alt="Hawk" title="Hawk">
	<img src="http://www.nyekrip.com/demo/cara-membuat-slideshow-dengan-css3/osprey.jpg" alt="Osprey">
	<img src="http://www.nyekrip.com/demo/cara-membuat-slideshow-dengan-css3/square-tailed-kite.jpg" alt="Square-tailed kite">
  </div>
 </div>





        </div>
        <div id="bg-menut"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> INFORMASI TERKINI</td></tr></table>
        </div>
        <div id="conten-menut">
        
		
		
        <?php
		
			$terkini=mysql_query("select * from berita order by tgl_posting desc LIMIT 5");
			while($r = mysql_fetch_array($terkini)){
				$id=$r['id_kategori'];
				$i = substr($r['isi'],0,490);
				$t=mysql_query("select * from kategori where id_kategori = '$id'");
				$r1 = mysql_fetch_array($t);
				echo "<div id=\"conten-menutbd\">";
				echo "<table border='0'><tr>
						<tr>
						
										  
							<td colspan='2'><h2><font face=\"Georgia, Times New Roman, Times, serif\" color=\"#0000FF\"><strong>$r[judul]</strong></font></h2><hr/></td>
						</tr>
						<tr>
							<td colspan='2'>Kategori : <strong><font color=\"#0000FF\">$r1[nama_kategori]</font></strong></td>
						</tr>
						<tr>
							<td valign='top'><img src='fotoberita/$r[foto]' width='150' rowspan='2' border=2 /></td>
							<td valign='top'>$i... <a href='index.php?p=lihatberita&id_kategori=$r[id_kategori]&berita_id=$r[berita_id]'>Baca selengkapnya</a></td>
						
						</tr>
						<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
						<tr>
							<td colspan='2'>Diposting oleh :<font color=\"#0000FF\"> <strong>$r[penulis]</strong></font></td>
						</tr>
						<tr>
							<td colspan='2'>pada : <strong>$r[tgl_posting]</strong>";
		
				$sqlkat1 = mysql_query("select * from kategori where id_kategori='$id'");
				$rkat1 = mysql_fetch_array($sqlkat1);
		
				$k = mysql_query("SELECT * FROM komentar_berita where berita_id='$r[berita_id]'");
				$row1 = mysql_num_rows($k);
				echo"&nbsp;<font color=\"#0000FF\"><b>($row1 komentar)</b></font>
				</td></tr></table><br>";
				echo "</div>";

			}
		

?>

      
      
        </div>

        <div id="conten-menutb">
        <p>Belum Tersedia</p>
        </div>
    </div>