<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>118140105</title>

	<style type="text/css">

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 30px;
		font-weight:bold;
		margin: 0 0 14px 0;
		padding: 5px 5px 10px 15px;
        text-align: center;
        

	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
        bottom:0;
	}

	#container {
		margin: 10px;
		box-shadow: 0 0 8px #D0D0D0;
        text-align:center;
        background-color: #FFEBCD;
	} */
	</style>
</head>
<body>

<div id="container">
    <h1>WEBSITE KITA! </h1>
    <h2> <p>Selamat datang User Pertama</p> </h2>
   

    <h2>Artikel Anda</h2>
    <form action="" method="post">
    <br>Judul Artikel  : <input type="text" name="nama">
    <br>
    <textarea rows="7" cols="80" name="isi">
            Tulis artikel anda disini
    </textarea>

    <br><input type="submit" name="tambahin" value="Tambahdata">
    </form>
    ====================================================
    <h2>Hapus Artikel</h2>
    <form action="">
        ID : <input type="text" name="keyhapus">
        <input type="submit" name="hapus" value="Hapus">
    </form>
   


	<p class="footer"> Oleh Vina Alvionita-118140105 &copy 2020 </p>
</div>
</body>
</html>


