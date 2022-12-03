<?php 
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "komik_online");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>