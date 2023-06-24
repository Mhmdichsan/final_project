<?php
    include 'koneksi.php';
    $id_mobil = $_GET['id_mobil'];
    $query ="DELETE FROM tb_parking WHERE id_mobil = '$id_mobil'";
    $hasil = mysqli_query($koneksi, $query);
 
    if($hasil){
     echo"
     <script>
     alert('Data has been deleted!')
     window.location = 'dshboard.php'
     </script>";
 
    }else{
     echo"
     <script>
     alert('General failure!')
     window.location = 'dshboard.php'
     </script>";
    }
?>