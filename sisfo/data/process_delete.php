<?php
include('../connection.php');
$id = $_GET['id'];

$query = mysqli_query($connect,"delete from tbl_buku where id_buku='".$id."'");

if($query) {
    echo "<div class='alert alert-success' role='alert'>Data berhasil dihapus</div>";
    echo "<a href='../views/dashboard.php'>Kembali</a>";
}
else {
    echo "<div class='alert alert-warning' role='alert'>terjadi kesalahan, id $id tidak ditemukan</div>";
}
?>