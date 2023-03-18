<?php

    require '../admin/koneksi.php';

    if(isset($_POST['Submit'])) {

        $fullname =filter_var($_POST['fullName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $username =filter_var($_POST['userName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password =filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmpw =filter_var($_POST['cpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
        $avatar = $_FILES['avatar'];

        if(!$fullname) {
            header("location:../signup.php?=fullname");
            die();

        } elseif(!$username){
            header("location:../signup.php?=username");
            die();

        } elseif(!$email){
            header("location:../signup.php?=email");
            die();

        }elseif(strlen($password) < 8 || strlen($confirmpw) < 8){
            header("location:../signup.php?=pass-character");
            die();

        } elseif(!$avatar){
            header("location:../signup.php?=avatar");
            die();

        } else {
            if($password !== $confirmpw) {
                header("location:../signup.php?=pass-notsame");
                die();

            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $user_check_query = "SELECT * FROM user where username = '$username' OR email = '$email'";
                $user_check_result = mysqli_query($varkoneksi, $user_check_query);

                if(mysqli_num_rows($user_check_result) > 0){
                    header("location:../signup.php?=usernamealready");
                    die();

                } else {
                    $time = time();
                    $avatar_name = $time . $avatar['name'];
                    $avatar_tmp_name = $avatar['tmp_name'];
                    $avatar_destination_path = '../img/' . $avatar_name;


                    $allowed_files = ['png', 'jpg', 'jpeg'];
                    $extention = explode('.', $avatar_name);
                    $extention = end($extention);
                    if(in_array($extention, $allowed_files)) {
                        //make sure cok
                        if($avatar['size'] < 1000000) {

                        } else {
                            $_SESSION['signup'] = 'File size too BIg';
                        }

                    } else {
                        $_SESSION['signup'] = "File sould be png, jpg, or jpeg";
                    }
                }
            }
        }
        
        if($_SESSION['signuo']){
            header('location:../login.php?+berhasil');
            die();
        } else {
            $inset_user_query = "INSERT INto user (fullname, username, email, password, avatar, is_dm) VALUEs ('$fullname', '$username', '$email', '$hassed_password', '$avatar_name', 0)";

            if(!mysqli_errno($connection)) {
                header('location:../login.php?=berhasil');
                die();
            }
        }

    } else {
        header('location:../dashboard.php');
    }




?>