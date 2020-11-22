<!DOCTYPE html>

<head>
    <title>Menghitung Harga Bet</title>
</head>

<body>
    <form method="GET" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama"> 
        <label for="color">Warna: </label>

        <select name="color" id="">
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="red">Red</option>            
            <option value="black">Black</option>
        </select>
       
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $Nama = $_GET['nama'];
        $Warna = $_GET['color'];

        function Hitung($nama)
        {
            $length=strlen($nama);
            if ($length>20){
                return ($length*700);
            } elseif ($length>11){
                return ($length*500);
            } else {
                return ($length*300);
            }
        }
        echo "<br>";
        echo "<font color='$Warna'>Nama = $Nama <br>";
        echo "<font color='$Warna'>Harga bet $Nama adalah = " . Hitung($Nama);
    }
    ?>
</body>

</html>