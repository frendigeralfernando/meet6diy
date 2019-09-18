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
@csrf
    <div class="container">
        <div>
            <form action="form/simpan" method="get">
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="-">-</option>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="notelp">Nomor telp :</label>
                    <input type="text" name="notelp" id="notelp" class="form-control" pattern="[0-9]{3}-[0-9]{3}" required>
                </div>
                <div class="form-group">
                <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>