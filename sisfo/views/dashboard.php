<!DOCTYPE html>
<?php include('../connection.php'); ?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,900&display=swap" rel="stylesheet">
    <title>Pustakaku</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar bg-white">
        <div class="container">
            <a class="navbar-brand" href="../index.php"> <span class="thin-daily">Pustaka</span>Ku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Hi, Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
        $query = mysqli_query($connect,"select * from tbl_buku");
        $jlh_data = mysqli_num_rows($query);
    ?>
    <div class="container">
        <div class="add-data mt-5 mb-2">
            <a href="./create.php">Tambah Data</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Stok Buku</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for($i=1; $i<=$jlh_data; $i++) {
                    $baris = mysqli_fetch_array($query);
                ?>
                    <tr>
                        <td><?php echo $baris['kode_buku'];?></td>
                        <td><?php echo $baris['judul_buku'];?></td>
                        <td><?php echo $baris['stok_buku'];?></td>
                        <td><a href="../views/update.php?id=<?php echo $baris['id_buku']; ?>">Edit</a> || <a href="../data/process_delete.php?id=<?php echo $baris['id_buku']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>


</body>
</html>