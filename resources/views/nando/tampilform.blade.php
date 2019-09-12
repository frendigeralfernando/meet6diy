<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<h1>Nama anda adalah {{ $data }}</h1>
	<h2>Jenis Kelamin Andalah {{ $jenis }}</h2>

	@if($jenis=='pria')
		<style type="text/css">
			body{
				background-color: #B22222;
				color:#fff;
				text-align: center;
			}
		</style>
	@elseif($jenis=='wanita')
		<style type="text/css">
			body{
				background-color: #008000;
				color:#B22222;
				text-align: center;
			}
		</style>
	@else
		<h1>Terjadi kesalahan</h1>
	@endif
</body>
</html>