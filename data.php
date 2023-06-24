<?php
include "koneksi.php";
$name = $_POST['name'];
$mobil = $_POST['mobil'];
$plat = $_POST['plat'];

$query = "INSERT INTO tb_parking VALUES ('','$name','$mobil','$plat')";
$sql = mysqli_query($koneksi,$query);
?>