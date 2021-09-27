<html>

<head>
	<title>Desain Formulir</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<h1>Formulir Pendaftaran Mahasiswa <br /> Sistem Informasi Akademik</h1>

	<div class="kotak_login">
		<p class="tulisan_login">login</p>
		<form action="tampil_data.php" method="POST">
			<div>
				<label>Nim</label> <br>
				<input type="text" name="nim">
			</div>
			<div>
				<label>Nama Mahasiswa</label> <br>
				<input type="text" name="nama_mahasiswa">
			</div>
			<div>
				<label>Kode Matakuliah</label> <br>
				<input type="number" name="kode_matakuliah">
			</div>
			<div>
				<label>Nama Mata Kuliah</label> <br>
				<input type="text" name="nama_mata_kuliah">
			</div>
			<div>
				<label>Sks</label> <br>
				<input type="number" name="sks">
			</div>
			<div style="margin-bottom: 1rem;">
				<label>Kelas</label> <br>
				<input type="radio" name="kelas" value="A"> A <br>
				<input type="radio" name="kelas" value="B"> B
			</div>
			<div style="margin-bottom: 1rem;">
				<label>Semester</label> <br>
				<select name="semester">
					<option value="1">1</option>
					<option value="3">3</option>
					<option value="5">5</option>
					<option value="7">7</option>
				</select>
			</div>

			<div>
				<button>Submit</button>
			</div>
		</form>
</body>

</html>