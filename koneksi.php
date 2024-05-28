<?php
$koneksi = mysqli_connect("localhost","root","","ppdb_fajar");

if (mysqli_connect_errno()){
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

?>