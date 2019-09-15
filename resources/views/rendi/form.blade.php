<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/rendi/simpan">
		@csrf
		nama= 
		<input type="text" name="nama">
		<select name="jk">
			<option value="">kosong</option>
			<option value="laki-laki">Laki-laki</option>
			<option value="perempuan">Perempuan</option>
		</select>
		<button type="submit">kirim</button>
	</form>

</body>
</html>