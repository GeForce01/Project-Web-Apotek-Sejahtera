<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "apotek_sejaktera";

$kon = mysqli_connect($server, $user, $password , $database);
if (!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
 
?>