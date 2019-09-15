<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Nama anda adalah {{ $nama ?? 'tidak ada nama'}}</h1>
	<h1> Jenis Kelamin anda adalah {{ $jk ?? 'tidak ada jenis kelamin'}}</h1>
	@if($jk=='laki-laki')
	<h1> Anda Seorang Laki-laki</h1>
	<style type="text/css">
		body{
			background-color:red;
		}
	</style>
	@elseif($jk=='perempuan')
	<h1> Anda Seorang Perempuan</h1>
	<style type="text/css">
		body{
			background-color:green;
		}
	</style>
	@else
	<h1> Tolong kelaminya diisi ya </h1>
	<style type="text/css">
		body{
			background-color:purple;
		}
	</style>
	@endif
</body>
</html>