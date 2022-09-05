<?php
//koneksi ke database//
$koneksi = mysqli_connect("localhost","root","","belajar");
if(isset($_POST['button'])){
    $nama_siswa = $_POST['nama'];
    $sekolah_siswa = $_POST['sekolah'];
    $kelas_siswa = $_POST['kelas'];
    $jurusan_siswa = $_POST['jurusan'];

    $query = "INSERT INTO siswa(nama_siswa,sekolah_siswa,kelas_siswa,jurusan_siswa) VALUES ('$nama_siswa','$sekolah_siswa','$kelas_siswa','$jurusan_siswa')";
    mysqli_query($koneksi, $query);

    if(mysqli_affected_rows($koneksi) > 0){
        header("Location:index.php");
    } else {
        echo "Data Gagal Di Tambahkan";
        echo mysqli_error($koneksi);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Data</title>

<!--Style-->
    <style>
        h1 {
            font-size: larger;
            margin: auto;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        button {
            margin-left: 7%;
        }
        p {
            text-align: center;
            font-weight: bold;
            font-size: large;
            padding-top: 15px;
        }
    </style>
<!--End Style-->

<!--Navbar-->
    <nav class="nav bg-warning">
    <h1>Create Read Delete Update</h1>
    </nav>
<!--End Navbar-->
        <p>Create</p>
</head>
<body>
<form action="#" method="POST">
<div class="container">
            <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nama" name="nama">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Kelas" name="kelas">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Jurusan" name="jurusan">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Sekolah" name="sekolah">
        </div>
        </div>
</div>
<br>
<button type="submit" class="btn bg-warning" name="button">Create</button>
</form>
</body>
</html>