<!DOCTYPE html>
<html>
<head>
	<title>profil</title>
</head>
<body>
	<form action="P07-hasil.php" method="POST">
	<h1>RUMUS-RUMUS</h1>
	<table border="1">
		<tr>
			<td>Nilai 1</td>
			<td><input type="text" name="nilai1"></td>
		</tr>
		<tr>
			<td>Nilai 2</td>
			<td><input type="text" name="nilai2"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="radio" name="rumus" value="segitiga">segitiga<br>
				<input type="radio" name="rumus" value="persegi panjang">persegi panjang</td>
		</tr>
	</table>
	<input type="submit" name="submit" value="submit">
	<input type="reset" name="reset" value="batal">
</form>
</body>
</html>