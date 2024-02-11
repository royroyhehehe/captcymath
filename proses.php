<?php
    include 'fungsi.php';
    session_start();

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $berhasil = tambah_data($_POST, $_FILES);

            if($berhasil){
                $_SESSION['eksekusi'] = "Data Saved Successfully";
                header("location: index.php");
            } else {
                echo $berhasil;    
            }

        } else if($_POST['aksi'] == "edit"){

            $berhasil = ubah_data($_POST, $_FILES);

            if($berhasil){
                $_SESSION['eksekusi'] = "Data Successfully Modified";
                header("location: index.php");
            } else {
                echo $berhasil;    
            }

        }

    }

    if(isset($_GET['hapus'])){
       
        $berhasil = hapus_data($_GET);

        if($berhasil){
            $_SESSION['eksekusi'] = "Data Deleted Successfully";
            header("location: index.php");
        } else {
            echo $berhasil;    
        }
    }
?>