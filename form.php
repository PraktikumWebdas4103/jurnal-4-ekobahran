<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>

<body>
	<center>
<form method="GET" action="">
<center>
	<h1>data</h1>

	<table>
		<tr>
			<td>Nim</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>hobby:<td>
			<input type = "checkbox" name ="hobby[]" value="makan">makan<br>
			<input type = "checkbox" name ="hobby[]" value="sing">sing<br>
			<input type = "checkbox" name ="hobby[]" value="dance">dance<br>
			<input type = "checkbox" name ="hobby[]" value="game">game<br>
		</tr>
		<tr>
			<td>upload foto</td>
			<td><input type = "file" name="upload foto" placeholder="upload foto"></br>
			</tr>
			<tr>
				<td>hapus foto</td>
				<td><input type ="submit" name="buttons" value="delete"></td>
				</tr>
				<tr>
			<td colspan="2" align="center"><input type="submit" name="simpan" value="submit"></td>
		</tr>
	</table>
</center>
