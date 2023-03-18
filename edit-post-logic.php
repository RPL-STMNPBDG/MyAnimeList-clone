<?php
    //mulai session
    session_start();

    //konek database
    include 'admin/koneksi.php';

    // cek ketika klik submit, insert form data ke tbl_user.
    if(isset($_POST['Submit'])) 
    {
        $judul           =   $_POST['tambah-post'];
        $genre               =   $_POST['genrerole'];
        $isi               =   $_POST['isi-artikel'];

        // Memasukan user baru ke table
        $insertdata = mysqli_query($varkoneksi,"INSERT into artikel (judul_artikel, genre_artikel, isi_artikel) VALUES ('$judul','$genre', '$isi')");

        // Tambahkan pesan ketika berhasil ditambahkan
        header("location:manage-post.php");

    }
?>