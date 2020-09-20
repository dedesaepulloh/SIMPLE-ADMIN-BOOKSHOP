<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM tbl_admin WHERE id_admin = '$_GET[id_admin]'");

    if(hapus){
        header("location:dataUser.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='dataUser.php'>Kembali</a>";
    }
?>