<?php
include 'koneksi.php';

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = input($_POST["name"]);
    $mobil = input($_POST["mobil"]);
    $plat = input($_POST["plat"]);

    $sql = "INSERT INTO tb_parking (id_mobil, name, mobil, plat) VALUES ('', '$name', '$mobil', '$plat')";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        header("Location: dshboard.php");
    } else {
        echo "Data failed";
    }
}
?>