<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_db = "pihmei";

$koneksi = mysqli_connect("localhost","root","","pihmei");

if ( !$koneksi ) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>