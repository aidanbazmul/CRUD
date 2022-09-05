<?php


$koneksi = mysqli_connect("localhost","root","","belajar");

if(isset($_POST['button'])){
    $id = $_GET['id'];

    $query = "DELETE FROM siswa WHERE siswa.id_siswa = '$id'";
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
    <title>Delete Data</title>

<!--Style-->
    <style>
        h1 {
            font-size:x-large;
            margin: auto;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        p {
            text-align: center;
            font-weight: bold;
            margin-top: 25%;
        }
        button {
            margin-left: 35%;
        }
        button2 {
            margin-left: 10%;
        }
    </style>
<!--End Style-->

<!--Navbar-->
    <nav class="nav bg-warning">
    <h1>Create Read Delete Update</h1>
    </nav>
<!--End Navbar-->
</head>
<body>
<form action="#" method="POST">
    <div class="container"> 
        <p>
            Are You Sure To Delete This Data ?
            <br>
            (This Data Cannot Be Recovered)
        </p>
        <button type="submit" name="button" class="btn btn-warning">Delete</button>
        <a href="index.php"><button2 type="submit" name="button2" class="btn btn-warning">Cancel</button2></a>
    </div>
</form>
</body>
</html>