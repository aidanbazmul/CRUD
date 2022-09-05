<?php
//koneksi ke database//
$koneksi = mysqli_connect("localhost","root","","belajar");
//query isi table//
$query = mysqli_query($koneksi, "SELECT * FROM siswa");

$hasil = [];

while ($data = mysqli_fetch_assoc($query)) {
    $hasil[] = $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>

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
        button1 {
            margin-left: 4.2px;
            margin-bottom: 3px;
        }
        .footer{
            width: 100%;
            height: 50px;
            padding-left: 13px;
            line-height: 50px;
            color: black;
            margin-top: 13.7%;
            font-family: Arial;
        }
    </style>
<!--End Style-->

<!--Navbar-->
    <nav class="nav bg-warning">
    <h1>Create Read Delete Update</h1>
    </nav>
<!--End Navbar-->
</head>
<p>Read</p>
<body>
<!--Container-->
    <div class="container">
        <table class="table" cellpadding="8" cellspacing="4">
        <thead>
            <tr>
            <th scope="col" name="id">No</th>
            <th scope="col" name="nama">Nama</th>
            <th scope="col" name="kelas">Kelas</th>
            <th scope="col" name="jurusan">Jurusan</th>
            <th scope="col" name="sekolah">Sekolah</th>
            <th scope="col" name="sekolah">Set</th>

            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        <?php foreach($hasil as $row) : ?>
            <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <td><?php echo $row['nama_siswa'] ?></td>
            <td><?php echo $row['kelas_siswa'] ?></td>
            <td><?php echo $row['jurusan_siswa'] ?></td>
            <td><?php echo $row['sekolah_siswa'] ?></td>
            <td>
            <a href="delete.php?id=<?php echo $row['id_siswa'] ?>"><button1 type="submit" name="button2" class="btn bg-warning">Delete</button1></a>
            <br>
            <a href="update.php?id=<?php echo $row['id_siswa'] ?>"><button2 type="submit" name="button3" class="btn bg-warning">Update</button2></a>
            </td>
            </tr>
        <?php endforeach ;?>
        </tbody>
        </table>
        <a href="add.php"><button type="submit" name="button" class="btn btn-warning">Create Data</button></a>
        <br>
        <br>
    </div>
    
<!--End Container-->
</body>
<div class="footer bg-warning">
Copyright Reserved © 2022 Muhammad Aidan Bazmul.
</div>
</html>