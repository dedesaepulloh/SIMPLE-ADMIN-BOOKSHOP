<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$_POST[kategori]')");

    if(simpan){
        header("location:dataKategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='kategori.php'>Kembali</a>";
    }
?>