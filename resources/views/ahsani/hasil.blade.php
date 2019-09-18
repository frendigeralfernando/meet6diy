<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="col-md-3 justify-center">
            <div class="card">
                <div class="card-header">
                    @if ($jenis_kelamin == 'laki-laki')
                        <img src="/img/img_avatar1.png" alt="image" class="card-img-top">
                    @elseif ($jenis_kelamin == 'perempuan')
                        <img src="/img/img_avatar6.png" alt="image" class="card-img-top">
                    @elseif ($jenis_kelamin == '-')
                        <img src="" alt="image" class="card-img-top">
                    @endif
                </div>
                <div class="card-body text-white">
                    <h4 class="card-title">DIY Member</h3>
                    <p class="card-text">Nama           : {{$nama}}</p>
                    <p class="card-text">Jenis Kelamin  : {{$jenis_kelamin}}</p>
                    <p class="card-text">Alamat         : {{$alamat}}</p>
                    <p class="card-text">Nomor Telpon   : {{$notelp}}</p>
            </div>
        </div>
    </div>
    @if ($jenis_kelamin == 'laki-laki')
        <style>
            .card{
                background-color:red;
            }
        </style>
    @elseif ($jenis_kelamin == 'perempuan')
        <style>
            .card{
                background-color:green;
            }
        </style>
    @elseif ($jenis_kelamin == '-')
        <style>
            .card{
                background-color:blue;
            }
        </style>
    @endif
    <script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>