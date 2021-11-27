<?php
$password = "";
$nama_data_base="halal_store";

$conn= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$conn){
    die('gagal melakukan koneksi');
}
?>