<?php  
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: ../view/Login.php");
}

include ('../control/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <div class="w-1/6 float-left flex flex-col justify-between h-screen bg-white border-r">
    <div class="px-4 py-6">
  
      <nav class="flex flex-col mt-px space-y-1">  
        <details class="group">
          <summary
            class="flex items-center px-4 py-2 rounded-lg cursor-pointer hover:bg-gray-100 hover:text-gray-700"
          >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 opacity-75"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                />
              </svg>
  
            <span class="ml-3 text-sm font-medium"> Edit </span>
  
            <span
              class="ml-auto transition duration-300 shrink-0 group-open:-rotate-180"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
          </summary>
  
          <nav class="mt-1.5 ml-8 flex flex-col">
            <a
              href=""
              class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-gray-700"
            >
              
  
              <span class="ml-3 text-sm font-medium"> Siswa </span>
            </a>
  
            <a
              href=""
              class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-gray-700"
            >              
  
              <span class="ml-3 text-sm font-medium"> Guru </span>
            </a>

            <a
              href=""
              class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-gray-700"
            >
  
              <span class="ml-3 text-sm font-medium"> Pelajaran </span>
            </a>

            <a
              href=""
              class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-gray-700"
            >
  
              <span class="ml-3 text-sm font-medium"> Materi </span>
            </a>
          </nav>
        </details>
  
            <a
              href=""
              class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-gray-700"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 opacity-75"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                />
              </svg>
  
              <span class="ml-3 text-sm font-medium"> Keamanan </span>
            </a>
  
            <form action="" method="POST">
            <div class="flex items-center w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-gray-700">
            <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                  />
                </svg>
            <a class="ml-3 text-sm font-medium" href="Logout.php" class="btn">Logout</a>
            </div>
            </form>
          </nav>
        </details>
    </div>
  
    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
      <a href="" class="flex items-center p-4 bg-white hover:bg-gray-50 shrink-0">
        <img
          class="border border-gray-700 object-cover w-10 h-10 rounded-full"
          src="profil.png"
          alt="Profil"
        />
        <?php echo "<h1 style='margin-left: 15px;'> " . $_SESSION['nama'] ."</h1>"; ?>
      </a>
    </div>
  </div>
    
  
  
  <a class="inline-flex items-center h-8 px-4 m-2 w-auto text-white bg-blue-600 rounded-lg hover:bg-blue-900"
  href="tambah_pelajaran.php">Tambah Pelajaran</a>
<table class="bg-white border-collapse">
 <thead>
            <th class="bg-blue-100 border text-left px-8 py-4">ID Pelajaran</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Nama Pelajaran</th>
            <th class="bg-blue-100 border text-left px-8 py-4">SKS</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Guru</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Opsi</th>

</thead>
<tbody>
<?php

$sql=mysqli_query($koneksi, "SELECT * FROM pelajaran ORDER BY id_pelajaran");
$nomor = 1 ;      
      while ($row=mysqli_fetch_array($sql)){
      ?>
        <tr>
        <td class="border px-8 py-4"><?php echo $nomor++; ?></td>
        <td class="border px-8 py-4"><?php echo $row['nama_pelajaran']; ?></td>
        <td class="border px-8 py-4"><?php echo $row['sks']; ?></td>
        <td class="border px-8 py-4"><?php echo $row['guru']; ?></td>
        <td class="border px-8 py-4 text-blue-600">
          <a class="inline-flex items-center h-8 px-4 m-2 w-auto text-white bg-blue-600 rounded-lg hover:bg-blue-900" href="edit_pelajaran.php?id=<?php echo $row['id_pelajaran']; ?>">Edit</a>
          <a class="inline-flex items-center h-8 px-4 m-2 w-auto text-white bg-red-600 rounded-lg hover:bg-red-900" href="hapus_pelajaran.php?id=<?php echo $row['id_pelajaran']; ?>">Hapus</a>
        </td>
      </tr>
      
      <?php } ?>
 
</tbody>
</table>

<?php
if(isset($_GET['pesan'])){
  $pesan = $_GET['pesan'];
  if($pesan == "input"){
    echo "Data berhasil di input.";
  }else if($pesan == "update"){
    echo "Data berhasil di update.";
  }else if($pesan == "hapus"){
    echo "Data berhasil di hapus.";
  }
}
?>

 </body>
 </html>