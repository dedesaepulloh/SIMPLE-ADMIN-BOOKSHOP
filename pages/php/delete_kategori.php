<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM tbl_kategori WHERE id_kategori = '$_GET[id_kategori]'");

    if(hapus){
        header("location:dataKategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='dataKategori.php'>Kembali</a>";
    }
?>