<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="jumbotron jumbotron-fluid bg-primary text-white">
		
		<div class="container">
			<h1 class="display-4">Panti Jomblo!</h1>
			<p class="lead">Kamu yang menyandang status tak punya pasangan alias jomblo jangan merasa dunia seakan mau kiamat. Di Yogyakarta, ada komunitas jomblo yang diberi nama Panti Jomblo. 
			<br>
			Jadi bagian dari komunitas ini, silahkan isi form dibawah ini!
			</p>
		
		</div>
	</div>
		<div class="container bg">
		<img src="../img/jomblo.png" class="rounded float-right" alt="../img/jomblo.png" >
			<div class="row d-flex align-items-stretch mt-3">
				<form method="post" action="/wahyu/simpan">
					@csrf
					<div class="col col-center mt-2">
						<div class="row">
							<label>Nama</label>
							<input type="text" class="form-control mb-2" name="nama" placeholder="Nama Anda">

							<label>Jenis Kelamin</label>
							<select class="custom-select custom-select-lg mb-2 form-control" name="jk" placeholder="Pilih Jenis Kelamin">

								<option disabled selected value> </option>
								<option value="laki-laki">
									laki-laki
								</option>		
								<option value="perempuan">
									perempuan
								</option>
							</select>
							<input class="btn btn-primary" type="submit" value="kirim">					
						</div>
					</div>
					
				</div>
				
			</form>

		</div>
	</div>
</body>
</html>