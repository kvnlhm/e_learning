<?php 
include ('../control/config.php');
$id_pelajaran = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pelajaran WHERE id_pelajaran='$id_pelajaran'")or die(mysqli_error($koneksi));

header("location:Dashboard.php?pesan=hapus");
?>