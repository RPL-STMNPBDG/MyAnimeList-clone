<?php

    require '../admin/koneksi.php';

    if(isset($_POST['Submit'])) {

        $fullname =filter_var($_POST['fullName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $username =filter_var($_POST['userName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password =filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        
        $direktori = "../img/";

        $fileName = $_FILES['emaill']['name'];
        move_uploaded_file($_FILES['emaill']['tmp_name'], $direktori.$fileName);
        // var_dump($fullname, $username, $email, $password, $confirmpw, $fileName);

        //Saring-Saringg
        $insertdata = mysqli_query($varkoneksi,"INSERT into user (fullname, username, email, password, avatar) VALUES ('$fullname','$username', '$email', '$password', '$fileName')");

        header('location:../login.php?=berhasil');

    } else {
        header('location:../login.php?=berhasil');
        die();
    }

?>