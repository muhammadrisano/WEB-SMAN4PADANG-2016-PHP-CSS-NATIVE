<?php
$host="localhost";
$username="root";
$password="q06121993";

$database="PPDBSMAN4";
$koneksi=mysql_connect($host,$username,$password);
$pilihdatabase=mysql_select_db($database,$koneksi);
if($pilihdatabase){
echo "<h3> Koneksi: terhubung ke server</h3>";}else{
echo "<h3> Koneksi : gagal</h3>";}

?>