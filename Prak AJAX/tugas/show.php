<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
    </tr>
    <?php

        include "koneksi.php";

        $hasil = mysqli_query($kon, "select * from mahasiswa order by nim asc");
        $no=0;
        while ($data = mysqli_fetch_array($hasil)):
            $no++;
    ?>

    <tr>
        <td> <?php echo $no; ?> </td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="<?php echo $data['NIM']; ?>" class="edit"> Edit </button>
            <button id="<?php echo $data['NIM']; ?>" class="delete"> Delete </button>
        </td>
    </tr>
    <?php endwhile;?>
</table>
<script type='text/javascript'>
$(document).on('click', '.delete', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "delete.php",
        data: {id:id},
        success: function() {
            $('#listdata').load("show.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
$(document).on('click', '.edit', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "update.php",
        data: {id:id},
        success: function() {
            $('#listdata').load("show.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>