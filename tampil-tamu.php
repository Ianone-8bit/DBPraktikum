<html>
<head>
<title> select query </title>
</head>
<body>
<table border=1>
<tr>
<td> Nama </td>
<td> Email </td>
<td> Pesan </td>
</tr>
<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:index.php?pesan=belum_login");
}
include 'koneksi.php';
$query=mysqli_query($konek,"select * from tamu");
while($data=mysqli_fetch_array($query))
{ ?>
<tr>
<td> <?php echo $data['No_tamu']; ?></td>    
<td> <?php echo $data['nama']; ?></td>
<td> <?php echo $data['email']; ?> </td>
<td> <?php echo $data['pesan']; ?></td>
<?php }?>
</table>
</body>
</html>
