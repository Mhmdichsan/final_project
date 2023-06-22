<?php
include "koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$pass = $_POST['pass'];

$query = "INSERT INTO user VALUES ('','$nama','$username','$alamat', '$no_hp', '$pass')";
$sql = mysqli_query($koneksi,$query);
?>

<script>
    alert("Registrasi Berhasil");
    window.location="index.php";
</script>