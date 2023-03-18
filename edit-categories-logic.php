<?php
    //konek database
    include 'admin/koneksi.php';

    //menangkap data yang dikirim dari form dengan methode post
    $id_petugas         =   $_POST['id_genre'];
    $nama_petugas       =   $_POST['judulgenre'];
    $username              =   $_POST['deskripsi'];



    //update data dari database
    mysqli_query($varkoneksi, "UPDATE genre set       judul_genre    =   '$nama_petugas', 
                                                        deskripsi         =   '$username',
                                                        where id_genre =   '$id_petugas'"
                );
    
    //mengalihkan ke halaman daftar mapel
    header("location:manage-categories.php");

  
?>