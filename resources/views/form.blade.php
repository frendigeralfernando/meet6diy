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
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" >
                        <option value="-">-</option>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telpon</label>
                    <input type="tel" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="phone" placeholder="Format: 123-45-678" required>
                </div>
                
                <button class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>