<?php
session_start();
include 'conection.php';

if (isset($_POST['tambah'])) {
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($conection, "INSERT INTO album VALUES ('','
     $namaalbum','$deskripsi','$tanggal','$userid')");

    echo "<script>
    alert(' Data Berhasil Disimpan');
    location.href='../admin/album.php';
    </script>";
}

if (isset($_POST['edit'])) {

    $albumid = $_POST['albumid'];
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($conection, "UPDATE album SET namaalbum='$namaalbum', deskripsi='$deskripsi', tanggalbuat='$tanggal' WHERE albumid='$albumid'");

    echo "<script>
    alert(' Data Berhasil Diperbaharui');
    location.href='../admin/album.php';
    </script>";
}
if (isset($_POST['hapus'])) {

    $albumid = $_POST['albumid'];
   

    $sql = mysqli_query($conection, "DELETE FROM album WHERE albumid='$albumid'");

    echo "<script>
    alert(' Data Berhasil Dihapus');
    location.href='../admin/album.php';
    </script>";
}

?>