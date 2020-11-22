<html>
<head>
  <title>Data Mahasiswa Itera</title>
</head>
<body>
  
  <h1>Simpan Data Mahasiswa Itera</h1>
  
<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwbtugas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal" . $conn->connect_error);
}
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $foto = $_POST["foto"];
    $prodi = $_POST["prodi"];

$sql = " INSERT INTO mahasiswa(NRP, Nama, Alamat, ID_Jur)
VALUES ('$nim', '$nama', '$foto', (SELECT ID_Jur FROM jurusan WHERE Nama ='$prodi'))";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  
  <form action="index.html">
      <input type ="submit" value="Back">
  </form>

</body>
</html>