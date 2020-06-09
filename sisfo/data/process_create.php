<?php
include('../connection.php');

$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$stok = $_POST['stok_buku'];
$gambar = $_POST['gambar_buku'];

$valKode = mysqli_query($connect,"select id_buku from tbl_buku where kode_buku='".$kode."'");
$valJudul = mysqli_query($connect,"select id_buku from tbl_buku where judul_buku='".$judul."'");

if(empty($kode) || empty($judul) || empty($stok) || empty($gambar)) {
    echo "<div class='alert alert-danger' role='alert'>Maaf field tidak ada yang boleh kosong</div>";
    echo "<a href='../views/create.php'>Kembali</a>";
}
elseif(mysqli_num_rows($valKode) > 0) {
    echo "<div class='alert alert-danger' role='alert'>Kode sudah digunakan, silahkan periksa kembali</div>";
    echo "<a href='../views/create.php'>Kembali</a>";
}
elseif(mysqli_num_rows($valJudul) > 0) {
    echo "<div class='alert alert-danger' role='alert'>Judul sudah digunakan, silahkan periksa kembali</div>";
    echo "<a href='../views/create.php'>Kembali</a>";
}
elseif($stok < 0) {
    echo "<div class='alert alert-danger' role='alert'>Stok buku tidak boleh lebih kecil dari 0 ataupun minus</div>";
    echo "<a href='../views/create.php'>Kembali</a>";
}
else {
    $query = mysqli_query($connect,"insert into tbl_buku
    (kode_buku, judul_buku, stok_buku, gambar_buku) values
    ('".$kode."','".$judul."','".$stok."','".$gambar."')");
    if($query) {
        echo "<div class='alert alert-success' role='alert'>Penambahan data baru berhasil</div>";
        echo "<a href='../views/dashboard.php'>Kembali</a>";
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>Terjadi kesalahan</div>";
    }
}
?>