<?php 
    include "koneksi.php";
    $edit = mysqli_query($koneksi, "UPDATE tbl_admin SET username= '$_POST[username]', password= '$_POST[password]', nama_admin= '$_POST[nama]' WHERE id_admin = '$_POST[id_admin]'");

    if(edit){
        header("location:dataUser.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='dataUser.php'>Kembali</a>";
    }
?>