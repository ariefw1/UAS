<?php
$server="localhost";
$user="id14366974_covid19";
$password="Rumah76gg!!!";
$db="id14366974_dbcovid";

$koneksi= mysqli_connect($server, $user, $password,$db);
if($koneksi) {

	echo "";
	echo "<br>";
}else{
	echo "server  tidak terkoneksi";
	echo "<br>";
}

?>