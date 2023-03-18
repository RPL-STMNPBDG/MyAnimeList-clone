<?php
    //mulai session
    session_start();


    // koneksi ke database
    include 'admin/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventory Barang</title>
    <link rel="stylesheet" href="css/signup.css">
</head>


<body>


    <div class="blank">
        

    
        <div class="teks">

            <div class="title">
                <p class="log">Halaman Registrasi</p>
                <p class="ira">byIra</p>
                <p class="ind">MYANIM#LIST</p>


                <p class="ya">Buat Akun Untuk Menjadi Calon Anime</p>

                <p class="turu">
                <?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan']=='fullname')
                {
                    echo "MAsukkan Nama Lengkap Anda!";
                }
                else if($_GET['pesan']=='username')
                {
                    echo "MAsukkan Username Anda!";
                }
                else if($_GET['pesan']=='email')
                {
                    echo "MAsukkan Email Valid Anda!";
                }
                else if($_GET['pesan']=='pass-character')
                {
                    echo "Password HArus Lebih dari 8 Karakter";
                }
                else if($_GET['pesan']=='pass-notsame')
                {
                    echo "<html>Password Anda Tidak Sama</html>";
                }
                else if($_GET['pesan']=='avatar')
                {
                    echo "Masukkan Foto Avatar Anda";
                } else if($_GET['pesan']=='usernamealready')
                {
                    echo "Username atau Email Sudah Ada";
                }
            }
        ?> 
                </p>


            </div>

            <div class="form">


               <section class="form__section">
                <div class="container form__section-container">


                    <form action="user/daftar-logic.php" method="post" enctype="multipart/form-data">


                        <input type="text" name="fullName" id="" placeholder="Nama Lengkap">
                        <input type="text" name="userName" id="" placeholder="Username">
                        <input type="email" name="email" id="" placeholder="Email">
                        <input type="password" name="password" id="" placeholder="Create Password">
                        <input type="password" name="cpassword" id="" placeholder="Confirm PAssword">
                        <div class="form__control">
                            <label for="avatar" class="user-avatar">User Avatar</label>
                            <input class="user-avatar-img"type="file" name="emaill" >
                        </div>

                        <button type="submit" class="submit" name="Submit">Sign Up</button>

                        <!-- <div class="signup">
                            <p> <i style="color: #4f6fd800;">aaaaaaaaaaaaaaaaaaaaaaaaaaaa</i>
                                Belum Punya Akun?
                                <a href="daftar.php">Sign Up</a>
                            </p>
                        </div> -->



                    </form>
                </div>
            </section>
        </div>


        </div>



           
            
        </div>


        <div class="gambar">
            <img src="img/gojo-png.png" alt="Gambar Anime Mau Login" width="60%">
        </div>


    </div>

    


</body>
</html>