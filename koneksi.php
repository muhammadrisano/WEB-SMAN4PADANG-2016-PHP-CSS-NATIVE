<?php
$host="localhost";
$username="root";
$password="";

$database="website_sman4";
$koneksi=mysql_connect($host,$username,$password);
$pilihdatabase=mysql_select_db($database,$koneksi);


?>
