<?php
include 'koneksi.php';
$id_mobil = $_GET['id_mobil'];
$name = $_POST['name'];
$mobil = $_POST['mobil'];
$plat = $_POST['plat'];

echo $nama;
$query = "UPDATE tb_parking SET name = '$name', mobil = '$mobil', plat = '$plat' WHERE tb_parking.id_mobil = $id_mobil ";
if($hasil =mysqli_query($koneksi, $query)){
    ?>
    <script>
        alert('Data added successfully')
        window.location = 'dshboard.php'
    </script>
    <?php
}else{
    ?>
    <script>
        alert('General failure')
    </script>
    <?php
}
?>
