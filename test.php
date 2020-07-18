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
