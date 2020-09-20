<?php 
    include "koneksi.php";
 
    if(isset($_POST["submit"])){
            if (!empty($_FILES["cover"]["name"])) {
                $target_dir ="upload/";
            
                $target_file =  $target_dir . basename($_FILES["cover"]["name"]);
            
                $ekstensi_file = strtolower((pathinfo($target_file,PATHINFO_EXTENSION)));
            
                $size_file = $_FILES["cover"]["size"];
            
                $type_file = $_FILES["cover"]["type"];
                
                $cover=date("dmyyhis").".".$ekstensi_file;
                move_uploaded_file($_FILES["cover"]["tmp_name"],$target_dir.$cover);
                
            } else {
                $cover = $_POST["old_cover"];
            }
            
            unlink("upload/$_POST[old_cover]");    

            $edit = mysqli_query($koneksi, "UPDATE tbl_buku SET judul = '$_POST[judul]', id_kategori = '$_POST[id_kategori]', pengarang = '$_POST[pengarang]', penerbit = '$_POST[penerbit]', harga = '$_POST[harga]', cover = '$cover' WHERE id_buku = '$_POST[id_buku]'");

        if($edit){
            echo "<script>alert('Data berhasil diupdate');document.location.href='dataBuku.php';</script>";
        }else{
            echo "<script>alert('Data gagal diupdate')</script>";
        }
    }
?>