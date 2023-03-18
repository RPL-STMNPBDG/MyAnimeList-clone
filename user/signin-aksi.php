<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            //mulai session
            session_start();

            //konek database
            include '../admin/koneksi.php';

            //ambil data dari form login
            $username=$_POST['nama'];
            $password=$_POST['katakunci'];

            //query
            $data = mysqli_query($varkoneksi,"SELECT * from user where username='$username' and password='$password'");


            //cek data
            $cek = mysqli_num_rows($data);

            if($cek>0)
            {
                $_SESSION['username']=$username;
                $_SESSION['status']='login';
                header("location:../dashboard.php");
            
            }
            else
            {
                header("location:../login.php?pesan=gagal");
            }
        ?>

</body>
</html>