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
                    <a class="nav-item nav-link" href="../index.php">Home</a>
                    <a class="nav-item nav-link" href="../views/dashboard.php">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="mx-auto mt-5" style="width: 500px;">
    <h1 class="mb-3 text-center">Tambah Data</h1>
        <form action="../data/process_create.php" method="post">
            <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" name="kode_buku" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="judul_buku" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok Buku</label>
                <input type="text" name="stok_buku" class="form-control">
            </div>
            <div class="form-group">
                <label>Link Gambar Buku</label>
                <input type="text" name="gambar_buku" class="form-control"  placeholder="https://example.com/image/image.jpg">
                <small id="linkhelp" class="form-text text-muted">penggunaan gambar cukup copy image address di internet.</small>
            </div>
                <input class="btn btn-primary" type="submit" value="Simpan">
                <a href="../views/dashboard.php" class="ml-3">Kembali</a>
        </form>
    </div>
    </div>

</body>
</html>