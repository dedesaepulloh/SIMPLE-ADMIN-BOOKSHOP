<?php 
    include "koneksi.php";
    $edit = mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori = '$_POST[kategori]' WHERE id_kategori = '$_POST[id_kategori]'");

    if(edit){
        header("location:dataKategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='dataKategori.php'>Kembali</a>";
    }
?>