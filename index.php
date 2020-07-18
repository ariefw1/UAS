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

    <form method="POST" action="input.php">
    <table  align="center">
	
	<tr>
        <td>Username : <input type="email" name="email"><br></td>
	</tr>
	<tr>
        <td>Password : <input type="password" name="password"><br></td>
        <?php echo $form_error; ?>
	</tr>
	<tr>
        <td><input type="submit" name="submit" value="Login"></td>
	</tr>
	    </table>
    </form>

</body>
</html>