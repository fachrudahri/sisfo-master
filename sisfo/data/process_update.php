<?php
include('../connection.php');

$id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$stok = $_POST['stok_buku'];
$gambar = $_POST['gambar_buku'];

if(empty($kode) || empty($judul) || empty($stok) || empty($gambar)) {
    echo "<div class='alert alert-danger' role='alert'>Maaf field tidak ada yang boleh kosong</div>";
    echo "<a href='../views/update.php?id=$id'>Kembali</a>";
}
elseif($stok < 0) {
    echo "<div class='alert alert-danger' role='alert'>Stok buku tidak boleh lebih kecil dari 0 ataupun minus</div>";
    echo "<a href='../views/update.php?id=$id'>Kembali</a>";
}
else {
    $query = mysqli_query($connect,"update tbl_buku set
    kode_buku='".$kode."',
    judul_buku='".$judul."',
    stok_buku='".$stok."',
    gambar_buku='".$gambar."' where id_buku='".$id."'");

    if($query) {
        echo "<div class='alert alert-success' role='alert'>Update data berhasil</div>";
        echo "<a href='../views/dashboard.php'>Kembali</a>";
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>Terjadi kesalahan</div>";
    }
}
?>