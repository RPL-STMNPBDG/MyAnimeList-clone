<?php
    //mulai session
    session_start();

    //konek database
    include 'admin/koneksi.php';

    // cek ketika klik submit, insert form data ke tbl_user.
    if(isset($_POST['Submit'])) 
    {
        $judulgenre           =   $_POST['judulgenre'];
        $deskripsi               =   $_POST['deskripsi'];

        // Memasukan user baru ke table
        $insertdata = mysqli_query($varkoneksi,"INSERT into genre (judul_genre, deskripsi) VALUES ('$judulgenre', '$deskripsi')");

        // Tambahkan pesan ketika berhasil ditambahkan
        header("location:manage-categories.php");

    }
?>