<?php
    //mulai session
    session_start();

    //konek database
    include '../admin/koneksi.php';

    // cek ketika klik submit, insert form data ke tbl_user.
    if(isset($_POST['Submit'])) 
    {
        // $fullname           =   $_POST['fullName'];
        // $email               =   $_POST['email'];
        // $username               =   $_POST['userName'];
        // $password               =   $_POST['password'];
        // $avatar               =   $_POST['avatar'];
        $fullname =filter_var($_POST['fullName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $username =filter_var($_POST['userName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password =filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmpw =filter_var($_POST['cpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
        $avatar = $_FILES['avatar'];


        if(!$fullname) {
            header("location:../signup.php?=fullname");
        } elseif(!$username){
            header("location:../signup.php?=username");
        } elseif(!$email){
            header("location:../signup.php?=email");
        }elseif(strlen($password) < 8 || strlen($confirmpw) < 8){
            header("location:../signup.php?=pass-character");
        } elseif(!$avatar){
            header("location:../signup.php?=avatar");
        } else {
            if($password !== $confirmpw) {
                header("location:../signup.php?=pass-notsame");
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $user_check_query = "SELECT * FROM user where username = '$username' OR email = '$email'";
                $user_check_result = mysqli_query($varkoneksi, $user_check_query);

                if(mysqli_num_rows($user_check_result) > 0){
                    header("location:../signup.php?=usernamealready");
                } else {
                    header("location:../login.php?pesan=berhasil");
                }
            }
        }


        // Memasukan user baru ke table
        $insertdata = mysqli_query($varkoneksi,"INSERT into user (fullname, username, email, password, avatar) VALUES ('$fullname', '$username', '$email', '$password', '$avatar')");

        // Tambahkan pesan ketika berhasil ditambahkan

    }
?>