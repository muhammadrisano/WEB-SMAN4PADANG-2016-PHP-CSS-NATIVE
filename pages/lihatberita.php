<div id="menu-tengah">
    	<div id="bg-menut"><table border="0"><tr><td><img src="images/logokecil.png" /></td><td> Detail Berita</td></tr></table>
        </div>
        <div id="conten-menut">
        <?php
		$sql = mysql_query("select * from berita where berita_id = '$_GET[berita_id]'");

		if (!empty($_SESSION['nama']) AND !empty($_SESSION['pass'])){
			echo "<a href='user/index.php'>Account Anda</a> | <a href='logout.php'>Logout</a>";
		}
		while($r = mysql_fetch_array($sql)){	
			echo "<table border='0'><tr>
			  <tr>
			    <td colspan='2'><h2><font face=\"Georgia, Times New Roman, Times, serif\" color=\"#0000FF\"><strong>$r[judul]</strong></font></h2><hr/></td>
			  </tr>
			 <td valign='top'><img src='fotoberita/$r[foto]' width='200' /></td>
				<td valign='top'>$r[isi]</td>
			  </tr>
			  <tr>
			  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
			    <td colspan='2'>Diposting oleh : <font color=\"#0000FF\"><strong>$r[penulis]</strong></font></td>
			  </tr>
			  <tr>
			    <td colspan='2'>pada : <strong>$r[tgl_posting]</strong></td>
			  </tr>
			  <tr>
			    <td colspan='2'>";
				if (!empty($_SESSION['nama']) AND !empty($_SESSION['pass'])){
					if($_SESSION['nama'] == $r['penulis']){
						echo "<a href='?pg=18&berita_id=$r[berita_id]'><a href='?pg=20&berita_id=$r[berita_id]'>Hapus Berita</a>";
					}
				}
				echo "</td>
			  </tr>
			  <tr>";
			  if (!empty($_SESSION['nama']) AND !empty($_SESSION['pass'])){
			    echo "<td colspan='2'><a href='index.php?p=home&username=$_SESSION[nama]'>Kembali ke Halaman Berita</a></td>";
			  }else{
				echo "<td colspan='2'><a href='index.php'>Kembali ke Halaman Berita</a></td>";
			  }
			  echo "</tr></table>";
		}
		
		
		
		
		
		?>
										  
                                         
										 
										 

        </div>
        
    </div>