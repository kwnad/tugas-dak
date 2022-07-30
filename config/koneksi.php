<?php
define('HOST','localhost');
define('USER','root');
define('DB','guru-api');
define('PASS','');
$conn = new mysqli(HOST,USER,PASS,DB) or die('Connection error to the database');

// $hostname = "localhost";
// $database = "guru-api";
// $username = "root";
// $password = "";
// $connect = mysqli_connect($hostname, $username, $password, $database);
// // script cek koneksi   
// if (!$connect) {
//     die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
// }

?>