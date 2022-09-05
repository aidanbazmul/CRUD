<?php
//koneksi ke database//
$koneksi = mysqli_connect("localhost","root","","belajar");

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa = '$id'");

$data = mysqli_fetch_assoc($query);

if(isset($_POST['button'])){
    $nama_siswa = $_POST['nama'];
    $kelas_siswa = $_POST['kelas'];
    $jurusan_siswa = $_POST['jurusan'];
    $sekolah_siswa = $_POST['sekolah'];

    mysqli_query($koneksi, "UPDATE siswa SET nama_siswa = '$nama_siswa', kelas_siswa = '$kelas_siswa', jurusan_siswa = '$jurusan_siswa', kelas_siswa = '$kelas_siswa' WHERE siswa.id_siswa = '$id'");

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
    <title>Update Data</title>

<!--Style-->
    <style>
        h1 {
            font-size: x-large;
            margin: auto;
            padding-top: 5px;
            padding-bottom: 5px;
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

</head>
<p>Update</p>
<body>
    
<div class="container">
        <form action="#" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $data['nama_siswa']?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Kelas" name="kelas" value="<?php echo $data['kelas_siswa']?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="<?php echo $data['jurusan_siswa']?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sekolah" name="sekolah" value="<?php echo $data['sekolah_siswa']?>">
                </div>
            </div>
            <br>
            <button type="submit" class="btn bg-warning" name="button">Update</button>
        </form>

</div>

</body>
</html>