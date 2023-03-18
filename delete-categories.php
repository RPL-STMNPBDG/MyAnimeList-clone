<?php
    //konek database
    include 'admin/koneksi.php';

    //menangkap data yang dikirim dari form dengan methode post
    $id=$_GET['id_genre'];

    //Delete data dari database
    mysqli_query($varkoneksi,"DELETE from genre where id_genre='$id'");
    

    //mengalihkan ke halaman daftar mapel
    header("location:manage-categories.php");
?>