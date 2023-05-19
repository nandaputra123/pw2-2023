<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            padding: 30px 100px 30px 100px;
            background: #93BFCF;
        }
    </style>
</head>
<body>

	<div>
		<h1>Form Pendaftaran</h1>
		<form method="POST" action="hasil_daftar.php" >
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="nama" type="text" class="form-control" id="nama_lengkap" required placeholder="Contoh: Nanda Putra">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="email" type="email" class="form-control" id="email" required placeholder="Contoh: nandawibowo@gmail.com">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea required name="alamat" class="form-control" id="alamat" placeholder="Masukkan Kota Domisili Anda"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input name="telepon" type="text" class="form-control" min="0" id="telepon" required placeholder="+628XXXXXXXXX">
			</div>
			<button name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>