<?php
include '../control/config.php';
error_reporting(0);
session_start();

if (isset($_SESSION['nama'])) {
    header("Location: ../view/Login.php");
  }

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $submit = $_POST['submit'];
    
    $query = "INSERT INTO admin (`nama`, `email`, `no`, `pass`, `cpass`, `submit`) VALUES ('$nama', '$email', '$no', '$pass', '$cpass', '$submit')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        header("Location: ../view/Login.php");
    }else{
        echo "<script>alert('Error')</script>";
    }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
        </div>
        <h3 class="text-2xl font-bold text-center">Daftar akun</h3>
        <form action="#" method="post">
            <div class="mt-4 text-gray-500 text-sm font-medium">
                <div>
                    <label class="block" for="nama">Nama<label>
                            <input type="text" name="nama" placeholder="Masukkan nama lengkap"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="email" name="email" placeholder="Masukkan email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block" for="no">No. Telepon<label>
                            <input type="number" name="no" placeholder="Masukkan no. telepon"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block" for="pass">Password<label>
                            <input type="password" name="pass" placeholder="Masukkan password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block" for="cpass">Konfirmasi Password<label>
                            <input type="password" name="cpass" placeholder="Masukkan konfirmasi password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <span class="text-xs text-red-400">Password harus sama!</span>
                <div class="flex">
                    <button name="submit" class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Buat Akun</button>
                </div>
               
            </div>
        </form>
        <div class="mt-6 text-grey-dark">
                    Sudah punya akun?
                    <a class="text-blue-600 hover:underline" href="Login.php">
                        Masuk
                    </a>
                </div>
    </div>
</div>
</body>