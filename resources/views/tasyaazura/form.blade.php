<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="get" action="/coba">
	@csrf
	<br>
	 <label>Nama : </label>
	<input type="text" name="nama">
	<br>
	<br>
	 <label>Jenis Kelamin : </label>
	<select name="jk">
		<option value="laki-laki">laki laki</option>
		<option value="perempuan">perempuan</option>
		<option value="">tidak ada gender</option>
	</select>
	<br>
	<br>
	 <label>Nomor Telpon : </label>
	 <input type="text" name="Notel">
	<br>
	<br>
	 <label>Alamat : </label>
	 <input type="text" name="alamat">
	 <br>
	<button type="submit">kirim</button>
</body>
</html>