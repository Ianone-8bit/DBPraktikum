<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:index.php?pesan=belum_login");
}
$hostname = "localhost"; //hostname
$username = "root"; //username untuk login ke mysql
$password = ""; //password untuk login ke mysql
$database = ""; //nama database
$konek=new mysqli($hostname,$username,$password, $database);
if ($konek->connect_error)
{
// jika terjadi error, matikan proses dengan die() atau exit();
die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>