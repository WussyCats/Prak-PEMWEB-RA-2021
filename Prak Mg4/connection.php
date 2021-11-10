<?php
$password = "";
$nama_data_base= "prak_mg4";

$conn= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$conn){
    die('gagal melakukan koneksi');
}
?>