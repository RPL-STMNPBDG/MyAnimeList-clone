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

        $direktori = "img/";

        $fileName = $_FILES['emaill']['name'];
        move_uploaded_file($_FILES['emaill']['tmp_name'], $direktori.$fileName);
        // var_dump($fullname, $username, $email, $password, $confirmpw, $fileName);

        //Saring-Saringg
        

        // Memasukan user baru ke table
        $insertdata = mysqli_query($varkoneksi,"INSERT into artikel (judul_artikel, genre_artikel, isi_artikel, avatar_artikel) VALUES ('$judul','$genre', '$isi', '$fileName')");

        // Tambahkan pesan ketika berhasil ditambahkan
        header("location:manage-post.php");

    }

?>