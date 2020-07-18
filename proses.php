<?php 
//KONEKSI KE DATABASE
include 'koneksi.php';
// MENANGKAP DATA YANG DI KIRIM DARI FORM



$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
$wilayah = $_POST ['wilayah'];
$nama = $_POST ['nama'];
$nim = $_POST ['nim'];
mysqli_query($koneksi,"insert into dtcovid values('$positif','$dirawat','$sembuh','$meninggal','$wilayah')");

?>


<form action="test.php" method="post">
<h3 align="center">Data Pemantauan Covid 19 Wilayah <?php echo"". $wilayah;?><br>
Per <?php date_default_timezone_set("Asia/Jakarta"); echo date (' d-m-Y  h:i:sa'); ?> <br>
Nama Operator : <?php echo "" . $nama; ?>  NIM : <?php echo "" . $nim; ?>

<body>

<table width="500" border="1" align="center">
<tr>
    <td>Jumlah Positif</td>
    <td>Jumlah Dirawat</td>
    <td>Jumlah Sembuh</td>
    <td>Jumlah Meningggal</td>
    <td>Opsi</td>
</tr>

<tr>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $positif; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $dirawat; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $sembuh; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $meninggal; ?>"/></</td>
    <td><input type="submit" value="edit"></td>
</tr>
</body>