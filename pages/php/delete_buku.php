<?php 
    include "koneksi.php";

    $tampil =  mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE id_buku = '$_GET[id_buku]' "));
    unlink("upload/$tampil[cover]");
    $hapus = mysqli_query($koneksi, "DELETE FROM tbl_buku WHERE id_buku = '$_GET[id_buku]'");
    if(hapus){
        header("location:dataBuku.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='dataBuku.php'>Kembali</a>";
    }
?>