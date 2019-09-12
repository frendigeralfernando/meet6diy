<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			background-color: #fff;
			color:#000;
			margin: 20% auto;
			padding: 2%
		}
	</style>
</head>
<body>
	<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $nama }}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{ $jenis }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $alamat }}</td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td>{{ $notelp }}</td>
			</tr>
	</table>
	@if($jenis=='pria')
		<style type="text/css">
			body{
				background-color: #B22222;
				color:#fff;
				
			}
		</style>
	@elseif($jenis=='wanita')
		<style type="text/css">
			body{
				background-color: #008000;
				color:#B22222;
				
			}
		</style>
	@else
		<h1>Terjadi kesalahan</h1>
	@endif
</body>
</html>