<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            margin-top: 150px;
            background-color: #93BFCF;
        }
		.table {
			background-color: #BDCDD6;
			border-radius: 5px 5px 5px 5px;
		}
    </style>
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Fakhirul Akmal</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+6287855516976</td>
				</tr>
				<tr>
					<td>Jancokers</td>
					<td>janck@gmail.com</td>
					<td>Bogor</td>
					<td>+62888999666777</td>
				</tr>
				<tr>
					<td>Zeus Mbah</td>
					<td>Mzeus@gmail.com</td>
					<td>Jakarta</td>
					<td>+62777666555444</td>
				</tr>
	

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
                  if ( isset ($_POST['submit'])) {
						//menimpan data
						$nama_lengkap = $_POST['nama'];
						$email = $_POST['email'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
	
					//menampilkan data
						echo '<tr>';
						echo '<td>' . $nama_lengkap;
						echo '<td>' . $email;
						echo '<td>' . $alamat;
						echo '<td>' . $telepon;

                  }
				?>

			</tbody>
		</table>
	</div>
</body>
</html>