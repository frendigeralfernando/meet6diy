<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="wahyu/simpan">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jk">
						<option value="pria"> saya Pria</option>
						<option value="wanita">saya Wanita</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td><input type="number" name="notel"></td>
			</tr>
		</table>
		  
		
		<button type="submit" >kirim</button>
	</form>
</body>
</html>