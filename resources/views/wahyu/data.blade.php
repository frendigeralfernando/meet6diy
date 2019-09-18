<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<style type="text/css">
		.containerku{
			height: 200px;
			margin-bottom: 10px;
		}
		.itemku{
			background-color: lightgrey;
			border-radius: 10px;
			border: 1px dotted grey;
			height: 48px ;
			margin: auto;
			padding: 10px;
		}
	</style>
</head>
		<body>
			<div class="container-fluid h-100">
				<div class="row align-items-center justify-content-between h-100">
			</div>
			@if($jk=='perempuan')
			<style type="text/css">
			body {
				background-color: red;
			}
		</style>
		@elseif($jk=='laki-laki')
		<style >
		body{
			background-color: green;
		}
		</style>

		@else()
		@endif
<div class="jumbotron-fluid">
	<p class="h1 mb-lg-5 font-weight-bold">Karena {{ $data ?? 'no name'}} adalah seorang {{ $jk }} tangguh, ada tips untuk mu agar selalu tangguh : </p> 
<div class="d-flex flex-column justify-content-between containerku">
<div class="p-2 itemku"> Lakukan Perbaikan untuk Diri Sendiri</div>	
<div class="p-2 itemku"> Jalin Komunikasi yang Baik dalam Bergaul dengan Siapa pun</div>
<div class="p-2 itemku"> Yuk, kembali geluti hobi atau belajar hal baru</div>	
<div class="p-2 itemku"> Pergi atau nongkrong dengan teman-temanmu</div>	
<div class="p-2 itemku"> Coba hubungi kembali teman lama</div>
<div class="p-2 itemku"> Jalin Hubungan Baik dengan Beberapa Temannya</div>
<div class="p-2 itemku"> Jadikan Diri Anda Sebagai Tempat Curhat yang Baik</div>	
<div class="p-2 itemku"> Bersikap Ramah</div>
<div class="p-2 itemku"> Terlihat Rapih dan Bersih</div>

</div>
</div>

<!-- Email -->
<!-- <input type="text" class="form-control mb-4" placeholder="E-mail"> -->

<!-- Password -->
<!-- <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password"> -->
		<!-- <select class="custom-select custom-select-lg mb-2 form-control" name="jk" placeholder="Pilih Jenis Kelamin">
		
			<option disabled selected value> </option>
			<option value="laki-laki">
				laki-laki
			</option>		
			<option value="perempuan">
				perempuan
			</option>
		</select>
		<input class="btn btn-primary" type="submit" value="kirim">
		
		<div class="d-flex justify-content-around">
			<div>
				Remember me
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
					<label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
				</div>
			</div>
			<div>
				Forgot password
				<a href="">Forgot password?</a>
			</div>
		</div>
		
		Sign in button
		<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
		
		Register
		<p>Not a member?
			<a href="">Register</a>
		</p>
		
		Social login
		<p>or sign in with:</p>
		
		<a type="button" class="light-blue-text mx-2">
			<i class="fab fa-facebook-f"></i>
		</a>
		<a type="button" class="light-blue-text mx-2">
			<i class="fab fa-twitter"></i>
		</a>
		<a type="button" class="light-blue-text mx-2">
			<i class="fab fa-linkedin-in"></i>
		</a>
		<a type="button" class="light-blue-text mx-2">
			<i class="fab fa-github"></i>
		</a> -->
	</body>
	</html>