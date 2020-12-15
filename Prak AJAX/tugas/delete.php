<?php
    include 'koneksi.php';

    $nim = $_POST['id'];
    $delete = "DELETE FROM mahasiswa WHERE NIM='$nim'";

    $hasil = mysqli_query($koneksi, $delete);
?>