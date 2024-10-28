<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:index.php?pesan=belum_login");
}
// menghubungkan dengan koneksi
$query=new mysqli(hostname: 'localhost', username: 'root', password: '', database: 'tamu');
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query(mysql: $query,query: "select * from admin where
username='$username' and password='$password'")or die
(mysqli_error(mysql: $query));
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows(result: $data);
if($cek > 0){
$_SESSION['username'] = $username;
$_SESSION['status'] = "login";
header(header: "location:Session.php");
}else{
header(header: "location:index.php?pesan=gagal");
} ?>

