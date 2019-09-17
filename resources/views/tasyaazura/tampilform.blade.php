<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Nama anda adalah {{ $data ?? 'no name'}}</h1>
	<p>jenis kelamin anda adalah {{$jeniskelamin}}</p>
	@if($jeniskelamin=='perempuan')
	<style type="text/css">
		body {
		background-color:#99FF66}
	</style>
	@elseif($jeniskelamin=='laki-laki')
	<style type="text/css">
		body {
		background-color:#FF3366}
	</style>
	@else
	<h3>tidak terdapat gender</h3>
	<style type="text/css">
		body {
		background-color:#CC99FF}
	</style>
	@endif
	<p>Nomor telepon anda adalah {{$nomortelepon}}</p>
	<p>Alamat anda adalah {{$Alamat}} </p>
</body>
</html>