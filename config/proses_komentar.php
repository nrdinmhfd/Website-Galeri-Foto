<?php
session_start();
include 'conection.php';


    $fotoid = $_POST['fotoid'];
    $userid = $_SESSION['userid'];
    $isikomentar = $_POST['isikomentar'];
    $tanggalkomentar = date('Y-m-d');

    $query = mysqli_query($conection, "INSERT INTO komentarfoto VALUES('','$fotoid','$userid,','$isikomentar','$tanggalkomentar')");

    echo "<script>
    location.href='../admin/index.php';
    </script>";

    
?>
   