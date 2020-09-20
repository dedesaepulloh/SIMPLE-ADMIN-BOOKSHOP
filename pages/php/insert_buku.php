<?php 
    include "koneksi.php";
    $target_dir = "upload/";

    $target_cover = $target_dir . basename($_FILES["cover"]["name"]);
    $ekstensi_cover = strtolower(pathinfo($target_cover, PATHINFO_EXTENSION));
    $cover = date("dmyyhis").".".$ekstensi_cover;
    $ekstensionList = array("jpg", "jpeg", "png", "gif");
    $pecah = explode(".",$target_cover);
    $ekstensi = $pecah[1];
    $size_file = $_FILES["cover"]["size"];
    
    if(in_array($ekstensi, $ekstensionList)){
        if($size_file <= 1000024){
            move_uploaded_file($_FILES["cover"]["tmp_name"], $target_dir . $cover);
                $simpan = mysqli_query($koneksi, "INSERT INTO tbl_buku (judul, id_kategori, pengarang, penerbit, harga,cover) VALUES ('$_POST[judul]', '$_POST[id_kategori]', '$_POST[pengarang]', '$_POST[penerbit]', '$_POST[harga]', '$cover')");
                header("location:dataBuku.php");
        }else{
            echo "<script>alert('Ukuran lebih 1 mb');window.location='dataBuku.php'</script>";
        }
        
    }else{
        echo "<script>alert('Bukan images');window.location='dataBuku.php'</script>";
    }
             
?>