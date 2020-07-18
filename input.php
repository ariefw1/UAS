<html>
<head>
<title></title>
</head>
<body>
<form action="proses.php" method="post">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr align="center">
<td><h3>Input Data Pemantauan Covid-19<br></h3><td>
</tr>


<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<td>Nama Mahasiswa	</td>
<td><input type=”text” name="nama" width=”75" value=""/></td>
</tr>
<tr>
<td>Nim </td>
<td><input type=”text” name="nim" width=”75" value="" /></td>
</tr>
<td>Nama Wilayah : </td>
<td>
<select name="wilayah" >
<option value="">- Pilih wilayah -</option>
<option value="DKI Jakarta">DKI JAKARTA</option>
<option value="Jawa Barat">JAWA BARAT</option>
<option value="Banten">BANTEN</option>
<option value="Jawa Tengah">JAWA TENGAH</option>
</select></td>

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