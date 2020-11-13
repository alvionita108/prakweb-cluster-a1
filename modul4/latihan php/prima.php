<html>

<head>
    <title> Bilangan prima</title>
    <style>
        .form{
            text-align:center;
        }

        p{
            color:blue;
        }
    </style>
</head>

<?php
    if (isset($_POST['submit'])) {
    $angka = $_POST['angka'];
    $hasil="";
    $p=0;

    for ($i=2; $i<=$angka; $i++) {
        if ($angka%$i==0)
            $p+=1;
    }
    
        
        if($angka<2){
            $hasil = $angka . " merupakan bilangan bukan prima";
        } else if($p>1){
            $hasil = $angka . " merupakan bilangan bukan  prima";
        }else{
            $hasil = $angka . " merupakan bilangan  prima";
        }
    }
?>

<div class="form">
    <h2>Cek Bilangan Prima</h2>
        <form method='post' action='prima.php'>
             <input type='text' name='angka' class='angka' placeholder='input angka'>
             <input type='submit' name='submit' value='cek' class='tombol'>
        </form>

        <?php if (isset($_POST['submit'])) { ?>
            <p><?php echo $hasil; ?></p>
        <?php } ?>
</div>


</html>