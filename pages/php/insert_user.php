<?php 
    include "koneksi.php";
    $pass = $_POST['userpass'];
    $md5 = md5 ($pass);
    $simpan = mysqli_query($koneksi, "INSERT INTO tbl_admin (username, password, nama_admin) VALUES ('$_POST[username]', '$md5', '$_POST[nama]')");

    if(simpan){
        header("location:dataUser.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='user.php'>Kembali</a>";
    }
?>