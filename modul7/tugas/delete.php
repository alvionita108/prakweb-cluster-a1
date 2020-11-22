<?php
    echo "<h1>HAPUS DATA</h1>";

$hapus=$_POST['hapus'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwbtugas";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal " . $conn->connect_error);
}

$sql = "delete from mahasiswa WHERE NRP='$hapus'";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>

<form action="index.html">
    <input type ="submit" value="Back">
</form>