<?php 

include ('../control/config.php');

if (isset($_POST['simpan'])) {

$id_pelajaran = $_POST['id_pelajaran'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$sks = $_POST['sks'];
$guru = $_POST['guru'];

mysqli_query($koneksi, "UPDATE pelajaran SET nama_pelajaran='$nama_pelajaran', sks='$sks', guru='$guru' WHERE id_pelajaran='$id_pelajaran'");

header("location:Dashboard.php?pesan=update");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Pelajaran</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="flex items-center justify-center min-h-screen bg-gray-100">
    	<div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
			<h3 class="text-2xl font-bold text-center">Edit Data Pelajaran</h3>			
	
	<br/>
	<br/>
	
	<?php 
	
	$id_pelajaran = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * FROM pelajaran WHERE id_pelajaran='$id_pelajaran'")or die(mysqli_error($koneksi));
	$nomor = 1;
	while($row = mysqli_fetch_array($sql)){
	?>
	<form action="edit_pelajaran.php" method="post">
	<div class="mt-4 text-gray-500 text-sm font-medium">
		
		<div class="mt-4">
			<label class="block" for="nama_pelajaran">Nama Pelajaran<label>
			<input type="hidden" name="id_pelajaran" value="<?php echo $row['id_pelajaran'] ?>">
			<input type="text" name="nama_pelajaran" value="<?php echo $row['nama_pelajaran'] ?>"
			class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
		</div>

		<div class="mt-4">
			<label class="block" for="sks">SKS<label>
			<input type="number" name="sks" value="<?php echo $row['sks'] ?>"
			class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
		</div>

		<div class="mt-4">
			<label class="block" for="guru">Guru<label>
			<input type="text" name="guru" value="<?php echo $row['guru'] ?>"
			class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
		</div>

		<div class="inline">
			<input type="submit" name="simpan" value="Simpan"
			class="w-auto px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">
		
		<a class="w-auto px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" 
  		href="Dashboard.php">Lihat Semua Data</a>
		</div>
		  
	</div>
	</div>
	</div>
	</form>
	<?php } ?>
</body>
</html>