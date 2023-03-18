<?php
    //konek database
    include 'admin/koneksi.php';

    //menangkap data yang dikirim dari form dengan methode post
    $id=$_GET['id_user'];

    //Delete data dari database
    mysqli_query($varkoneksi,"DELETE from user where id_user='$id'");

    $thumbail_query = "SELECT avatar from user where id_user=$id";
    $thumbail_result = mysqli_query($varkoneksi, $thumbail_query);
    if(mysqli_num_rows($thumbail_result) > 0){
        
        while ($thumbail = mysqli_fetch_assoc($thumbail_result)) {

            $thumbail_post = 'img/' . $thumbail['avatar'];

            if ($thumbail_post) 
            {
                unlink($thumbail_post);
            }

        }
    }
    

    //mengalihkan ke halaman daftar mapel
    header("location:manage-user.php");
?>