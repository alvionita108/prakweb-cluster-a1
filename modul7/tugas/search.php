<?php
echo "<h1>DATA DITEMUKAN</h1>";

$cari=$_POST['cari'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwbtugas";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal " . $conn->connect_error);
}

$sql = "SELECT mahasiswa.NRP,mahasiswa.Nama,mahasiswa.Foto,jurusan.Nama
FROM mahasiswa,jurusan WHERE mahasiswa.Nama='$cari' AND jurusan.ID_Jur=mahasiswa.ID_Jur ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_array($result)) {
    echo "NRP: " . $row["mahasiswa.NRP"]. "Nama: " . $row["mahasiswa.Nama"]."Foto: " . $row["mahasiswa.Foto"].  " Jurusan: " . $row["jurusan.Nama"]. "<br>";
  }
}else {
  echo "tidak ada data ditemukan";
}

$conn->close();

?>
<form action="index.html">
    <input type ="submit" value="Back">
</form>

