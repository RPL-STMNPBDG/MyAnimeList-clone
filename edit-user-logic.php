<?php
    //mulai session
    session_start();

    //konek database
    include 'admin/koneksi.php';

    // cek ketika klik submit, insert form data ke tbl_user.
    if(isset($_POST['Submit'])) 
    {
        $fullname           =   $_POST['fullname'];
        $username               =   $_POST['username'];
        $email               =   $_POST['email'];
        $password               =   $_POST['password'];
        $userrole               =   $_POST['userrole'];



        // Memasukan user baru ke table
        $insertdata = mysqli_query($varkoneksi,"INSERT into user (fullname, role, username, email, password) VALUES ('$fullname','$userrole', '$username', '$email', '$password')");

        // Tambahkan pesan ketika berhasil ditambahkan
        header("location:manage-user.php");

    }
?>