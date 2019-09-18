<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
</head>
<body>
{{--  {{$nama}}
{{$jenis_kelamin}}
{{$alamat}}
{{$phone}}  --}}

<h1 class="text-center">Nama anda adalah {{ $nama ?? 'No name' }}</h1>
<h1 class="text-center">Jenis kelamin anda adalah {{$jenis_kelamin ?? 'No jk' }}</h1>
@if($jenis_kelamin=='perempuan')
    <style>
        body{
            background-color: green;
        }
    </style>
@elseif($jenis_kelamin=='laki-laki')
    <style>
        body{
            background-color: red;
        }
    </style>
@else
    <h1>jenis kelamin undefined</h1>
@endif
<h1 class="text-center">Alamat anda adalah {{$alamat ?? 'Alamat tidak diketahui'}}</h1>
<h1 class="text-center">No tlp anda adalah {{$phone ?? 'No tlp tidak diketahui'}}</h1>

<script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>