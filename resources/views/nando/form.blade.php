<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="form/simpan">
		@csrf
		Nama : 
		<input type="text" name="nama">
		<select name="jk">
			<option value="pria"> saya Pria</option>
			<option value="wanita">saya Wanita</option>
		</select>
		<button type="submit" >kirim</button>
	</form>
</body>
</html>