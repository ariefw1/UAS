# UAS
UAS Data Covid
<?php
// fungsi untuk memulai session
session_start();

// variabel kosong untuk menyimpan pesan error
$form_error = '';

// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){

    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validasi login benar atau salah
    if($email == 'arief' AND $password == 'admin123'){

        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['email'] = $email;
        header('Location: profil.php');
    }else{

        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}

?>

<!DOCTYPE html>
<head>
    <title>Login Ke Data Covid</title>
</head>
<body>

    <h3 align="center">Silakan Login</h3>

    <form method="POST" action="input.php">       ( setelah mengisi forum login, akan di lanjutkan ke forum input )
    <table  align="center">
	
	<tr>
        <td>Username : <input type="email" name="email"><br></td>    ( untuk mengisi username by email )
	</tr>
	<tr>
        <td>Password : <input type="password" name="password"><br></td> (untuk mengisi password  )
        <?php echo $form_error; ?>
	</tr>
	<tr>
        <td><input type="submit" name="submit" value="Login"></td>
	</tr>
	    </table>
    </form>

</body>
</html>

<html>
<head>
<title></title>
</head>
<body>
  // setelah menginput akan melakukan post ke proses
<form action="proses.php" method="post">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr align="center">
<td><h3>Input Data Pemantauan Covid-19<br></h3><td>
</tr>


<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<td>Nama Mahasiswa	</td>   (untuk menginput nama operator)
<td><input type=”text” name="nama" width=”75" value=""/></td>
</tr>
<tr>
<td>Nim </td>  (menginput NIM operator)
<td><input type=”text” name="nim" width=”75" value="" /></td>
</tr>
<td>Nama Wilayah : </td>       (menginput nama wilayah menggunakan dropdown)
<td>
<select name="wilayah" >
<option value="">- Pilih wilayah -</option>
<option value="DKI Jakarta">DKI JAKARTA</option>
<option value="Jawa Barat">JAWA BARAT</option>
<option value="Banten">BANTEN</option>
<option value="Jawa Tengah">JAWA TENGAH</option>
</select></td>
// untuk menginput masing masing dari jumlah data covid
<tr>
<td>Jumlah Positif: </td>
<td><input type=”text” name="positif" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Dirawat : </td>
<td><input type=”text” name="dirawat" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Sembuh : </td>
<td><input type=”text” name="sembuh" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Meninggal : </td>
<td><input type=”text” name="meninggal" width=”75" ></td>
</tr>

<tr>
<td><input type="submit" value="kirim"></td>
</tr>
</table>
</table>
</form>
</body>
</html>

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
// tabel output dari hasil yang sudah kita input
<tr>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $positif; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $dirawat; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $sembuh; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $meninggal; ?>"/></</td>
    <td><input type="submit" value="edit"></td>
</tr>
</body>

<html>
<head>
	<title>Data Covid</title>
</head>
<body>

<h3 align="center">Data Pemantauan Covid-19 Wilayah <?php echo "" . $wilayah; ?><br>
<?php echo date('l, d-m-Y  h:i:s a'); ?><br>
Nama Operator <?php echo "" . $nama; ?>  NIM <?php echo "" . $nim; ?>
</h3></h2>
	<br/>
	<br/>
	<br/>
	<table align="center" border="1">
		<tr>



<td>Positif </td>
<td>Dirawat </td>
<td>Sembuh </td>
<td>Meninggal</td>

		</tr>
		<?php 
		include 'koneksi.php';
  
        
		$data = mysqli_query($koneksi,"select * from dtcovid");
		while($d = mysqli_fetch_array($data)){
			?>
    
			<tr>
            <td><?php echo $d['positif']; ?></td>
				<td><?php echo $d['dirawat']; ?></td>
				<td><?php echo $d['sembuh']; ?></td>
				<td><?php echo $d['meninggal']; ?></td>
				
				
				
				// untuk mengedit data atau menghapus data
				<td>
					<a href="edit.php?id=<?php echo $d['positif']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['positif']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<a href="input.php">KEMBALI</a>
</body>
</html>
