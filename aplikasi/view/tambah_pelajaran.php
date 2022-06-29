<?php
include ('../control/config.php');

/*Mengecek apabila tombol simpan di klik*/
if (isset($_POST['simpan'])) {

/*Menerima dan Menampung data*/

$nama_pelajaran = $_POST['nama_pelajaran'];
$sks = $_POST['sks'];
$guru = $_POST['guru'];
/*Melakukan penyimpanan data*/
 mysqli_query($koneksi,"INSERT INTO pelajaran VALUES ('','$nama_pelajaran', '$sks', '$guru')");

 header("Location: Dashboard.php?pesan=input");

}  

?>

<html>
<head>
	<title>Form Tambah Pelajaran</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<div class="flex items-center justify-center min-h-screen bg-gray-100">
    	<div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
			<h3 class="text-2xl font-bold text-center">Tambah Pelajaran</h3>			
			
			<form action="tambah_pelajaran.php" method="POST">
			<div class="mt-4 text-gray-500 text-sm font-medium">
			
			<div class="mt-4">
                <label class="block" for="nama_pelajaran">Nama Pelajaran<label>
				<input type="text" name="nama_pelajaran" value="" placeholder="Input nama pelajaran"
				class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
			</div>
			
			<div class="mt-4">
				<label class="block" for="sks">SKS<label>
				<input type="number" name="sks" value="" placeholder="Input sks pelajaran"
				class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
			</div>

			<div class="mt-4">
				<label class="block" for="guru">Guru<label>
				<input type="text" name="guru" value="" placeholder="Input guru mapel "
				class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
			</div>
			
			<div class="flex">
				<input type="submit" name="simpan" value="Simpan"
				class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>