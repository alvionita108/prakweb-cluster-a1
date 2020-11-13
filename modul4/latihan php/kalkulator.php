<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>KALKULATOR</title>

  <style>
      .kalkulator{
          text-align:center;
          backgroundcolor:blue;
          padding:3px;
      }
  </style>
</head>

<body>

  <article>
    <?php
    if (isset($_POST['hitung'])) {
      $angka1 = $_POST['angka1'];
      $angka2 = $_POST['angka2'];
      $op = $_POST['op'];
        switch ($op) {
            case '-':
                $hasil = $angka1 - $angka2;
            break;
            case '+':
                $hasil = $angka1 + $angka2;
            break;
            case '/':
                $hasil = $angka1 / $angka2;
            break;
            case '*':
                $hasil = $angka1 * $angka2;
            break;
            case '%':
                $hasil = $angka1 % $angka2;
            break;
            default:
                $hasil = "Operator belum dipilih";
            break;
        }
    }
    ?>
    <div class="kalkulator">
      <h1 >Kalkulator sederhana</h1>

      <form method="post" action="kalkulator.php">
        <input type="text" name="angka1" class="angka"  placeholder="Angka pertama">
        <input type="text" name="angka2" class="angka" placeholder="Angka kedua">
            <select class="opt" name="op">
                <option value="#">Pilih Operator</option>
                <option value="-">-</option>
                <option value="+">+</option>
                <option value="/">/</option>
                <option value="*">x</option>
                
                <option value="%">%</option>
            </select>

            <br> <input type="submit" value="Hasil" class="button" name="hitung" >
        </form>

        
      <?php if (isset($_POST['hitung'])) { ?>
        <input type="text" value="<?php echo $hasil; ?>" class="angka">
      <?php } else { ?>
        <input type="text" value="0" class="angka">
      <?php } ?>
    </div>
  </article>
  </div>
</body>

</html>