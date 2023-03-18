<?php
    //konek database
    include 'admin/koneksi.php';

    //menangkap data yang dikirim dari form dengan methode post
    $id=$_GET['id_artikel'];

    //Delete data dari database
    mysqli_query($varkoneksi,"DELETE from artikel where id_artikel='$id'");
    

    //mengalihkan ke halaman daftar mapel
    header("location:manage-post.php");
?>