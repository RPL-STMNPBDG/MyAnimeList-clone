<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventory Barang</title>
    <link rel="stylesheet" href="css/style-login.css">
</head>


<body>


    <div class="blank">

        <div class="gambar">
            <img src="img/login.png" alt="Gambar Anime Mau Login" width="95%">
        </div>

        

        <div class="teks">

            <div class="title">
                <p class="log">Halaman Login</p>
                <p class="ira">byIra</p>

                <p class="ind">MYANIM3LIST</p>
                <p class="ya">Login Untuk Menjadi Anime</p>

            </div>

            <div class="form">


            <?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan']=='gagal')
                {
                    echo "<div class='gagal'>Gagal Login, username atau password salah</div>";
                }
                else if($_GET['pesan']=='logout')
                {
                    echo "<div class='logout'>Anda sudah logout</div>";
                }
                else if($_GET['pesan']=='berhasil')
                {
                    echo "<div class='gagal'>Akun Anda Berhasil Dibuat, Silakan Login</div>";
                }
                if($_GET['pesan']=='belum_login')
                {
                    echo "<div class='harus'>Anda harus login dahulu untuk mengakses halaman admin</div>";
                }
            }
        ?> 

                <form method="post" action="user/signin-aksi.php">
                <table class="pot" align="center">
                    <tr class="ba">
                        <td class="ats">Username</td>
                        <td class="bwh"><input type="text" name="nama" placeholder="Masukan username"></td>
                    </tr>
    

                    <tr class="da">
                        <td class="ats">Password</td>
                        <td class="bwh"><input type="password" name="katakunci" placeholder="Masukan password"></td>
                    </tr>


                    <tr class="ca">
                        <td class="submit"><input type="submit" value="MASUK"></td>
                    </tr>
                </table>
                </form>


                <div class="signup">
                <p> <i style="color: #4f6fd800;">aaaaaaaaaaaaaaaaaaaaaaaaaaaa</i>
                    Belum Punya Akun?
                    <a href="signup.php">Sign Up</a>
                </p>
                
        </div>


            </div>



           
            
        </div>


    </div>

    


</body>
</html>