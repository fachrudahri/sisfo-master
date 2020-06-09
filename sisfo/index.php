<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,900&display=swap" rel="stylesheet">

    <title>Pustakaku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar bg-white">
        <div class="container">
            <a class="navbar-brand" href="./index.php"> <span class="thin-daily">Pustaka</span>Ku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link" href="./views/create.php">Add Book</a>
                    <a class="nav-item nav-link btn-started" href="./views/dashboard.php">Go to Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row baris-pertama">
            <div class="col-md-6 side-one">
                <h1>Daftar <span>perpustakaan</span> pemrograman web <span>developer</span> terdapat disini<span>.</span></h1>
                <a href="./views/dashboard.php"><button class="btn started">Go to Dashboard</button></a>
            </div>
            <div class="col-md-6">
                <div class="hero">
                    <img src="images/undraw_book_lover_mkck.svg" alt="">
                </div>
            </div>
        </div>
        <?php
        include('./connection.php');
        $query = mysqli_query($connect,"select * from tbl_buku");
        $jlh_data = mysqli_num_rows($query);
        ?>
        <div class="servis">
            <h3>List Buku</h3>
        </div>
        <div class="row baris-kedua justify-content-center">
            <?php
            for($i=1; $i<=$jlh_data; $i++) {
            $baris = mysqli_fetch_array($query);
            ?>
            <div class="col-lg-4 col-xl-3">
                <div class="card-service">
                    <div class="thumb">
                        <img src="<?php echo $baris['gambar_buku'];?>" alt="">
                    </div>
                    <h3><span><?php echo $baris['judul_buku'];?></span></h3>
                    <p><span>Code Book : </span><?php echo $baris['kode_buku'];?></p>
                    <p><span>Stock : </span><?php echo $baris['stok_buku'];?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="footer">

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>