<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:login.php?pesan=belum_login");
    }

    // koneksi ke database
    include 'admin/koneksi.php';

    // Fetch semua data user dari database
    $result = mysqli_query($varkoneksi, "SELECT * FROM user ORDER BY id_user ASC");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Website Icon" href="img/medeia_png.png">
    <title>MyAnim3List</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/gaya.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/sindex.css" type="text/css">
  
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    

    <header>
        <div class="header-content">
          
          <a href="dashboard.php" class="logo">
            <img src="img/medeia_png.png" alt="MyAnim3List" width="24%">
            <p class="logo-name">MYA<i style="color: #d44efd;">NIM3</i>LIST</p>
          </a>
          
          <input type="checkbox" id="hamburger" aria-label="menu button">
          <label for="hamburger"><span></span></label>
          
          <nav aria-label="main navigation">
            <ul class="menus" style="background: rgb(0,0,0);
            background: linear-gradient(252deg, rgba(0,0,0,0) 14%, rgba(73,12,149,1) 48%, rgba(0,0,0,1) 75%); margin-top: 5px; margin-left:15px;">
              <li><a class="home"href="#">Home</a></li>
              <li>
                <button 
                  type="button" 
                  aria-haspopup="true" 
                  aria-expanded="true" 
                  aria-controls="dropdown1"  
                  class="servis"
                  style="display: flex;"
                >
                  Services<span class="arrow" style="margin-top: 5px;"></span>   
                </button>
                <ul class="dropdown" id="dropdown1">
                  <li><a href="#">Report</a></li> 
                  <li><a href="#">Repost</a></li>
                  <li><a href="#">Subscribe</a></li>
                </ul>
              </li>
              <li>
                <button 
                  type="button" 
                  aria-haspopup="true" 
                  class="servis"
                  aria-expanded="true" 
                  aria-controls="dropdown1"  
                  style="display: flex;"
                >
                  Contacts<span class="arrow" style="margin-top: 5px;"></span>   
                </button>
                <ul class="dropdown" id="dropdown1">
                  <li><a href="#">Facebook</a></li> 
                  <li><a href="#">Discord</a></li>
                  <li><a href="#">WhatsApp</a></li>
                  <li><a href="#">Instagram</a></li>
                </ul>
              </li>
              <li><a href="#">About</a></li>
              <li></li>
              <li></li>


              <li>
              <button
                style="margin-left: 80%;" 
                  type="button" 
                  aria-haspopup="true" 
                  class="servis"
                  aria-expanded="true" 
                  aria-controls="dropdown1"  
                >
                  <img src="img/meddie.jpg" alt="" width="10%" style="">  
                </button>
                <ul class="dropdown" id="dropdown1">
                  <li><a href="#" class="dash">Dashboard</a></li> 
                  <li><a href="index.php" class="pulang"onclick='return confirm(`Apa Anda yakin akan Log Out??`)'>Log Out</a></li>

                </ul>
              </li>


              
            </ul>

            
        
          </nav>

          

        </div>
      </header>
 
    <div class="kirikanan">
        <div class="kiri">
            
        </div>
        <div class="artikel">
                
            <div class="artikelkiri">
                
                <div class="list-anime">
                    <br>
                    <br>

                    <p class="gendre">
                        Demon
                    </p>
                    
                </div>
                <div class="blog-anime">
                  
                    <div class="post__thumbail">
                      <img src="https://www.pixelstalk.net/wp-content/uploads/images6/4K-Anime-Wallpaper-Desktop-1.jpg" alt="">
                    </div>
                      <div class="post__info" >
                        <a href="#" class="category__button" style="margin-left: 20px;">Demon</a>
                        <a href="#" class="category__button" style="margin-left: 20px;">Demon</a>
                        <br>
                        <h2 class="post__title">
                         
                            <a href="#" style="padding-left: 10px;">Kimetsu No Yaiba</a>
                        </h2>
                        <p class="post__body" style="padding-left: 15px;">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error eius quibusdam eni distinctio unde eveniet officiis?
                        </p>
                        <div class="post__author">
                          <div class="post__author-avatar" style="margin-left: -45px; margin-top: -2px;">
                            <img src="img/medeia.jpg" alt="">
                          </div>
                          <div class="post__author-info" style="margin-left: 15px; margin-top: -2px;">
                            <p>
                              By : Ira Humanitas
                            
                            <small>
                              May, 26 2008 | 07.00.00
                            </small>
                            </p>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    

                    <section class="posts">
                      <div class="posts__container">
                        <article class="post">
                          <div class="post__thumbail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRifVyMH9e_X4g3dSHDNrQDkaYu6VydNS-ygQ&usqp=CAU" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Hentai</a>
                            <div class="post__title">
                              <a href="">Lorem ipsum dolor sit amet.</a>
                            </div>
                            <p class="post__body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur error dolores ipsa distinctio,sitatibus nam iusto ea assumenda provident voluptas ad.
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  May, 26 2008 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>

                        <article class="post">
                          <div class="post__thumbail">
                            <img src="img/jujutsukaisen_gojo.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Hentai</a>
                            <a href="#" class="category__button" style="margin-left: 20px;">Demon</a>

                            <div class="post__title">
                              <a href="">Lorem ipsum dolor sit amet.</a>
                            </div>
                            <p class="post__body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur error dolores ipsa distinctio,sitatibus nam iusto ea assumenda provident voluptas ad.
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  May, 26 2008 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>


                        <article class="post">
                          <div class="post__thumbail">
                            <img src="img/jujutsukaisen_gojo.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Hentai</a>
                            <div class="post__title">
                              <a href="">Lorem ipsum dolor sit amet.</a>
                            </div>
                            <p class="post__body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur error dolores ipsa distinctio,sitatibus nam iusto ea assumenda provident voluptas ad.
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  May, 26 2008 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </section>


                    <section class="posts">
                      <div class="posts__container">
                        <article class="post">
                          <div class="post__thumbail">
                            <img src="img/jujutsukaisen_gojo.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Hentai</a>
                            <div class="post__title">
                              <a href="">Lorem ipsum dolor sit amet.</a>
                            </div>
                            <p class="post__body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur error dolores ipsa distinctio,sitatibus nam iusto ea assumenda provident voluptas ad.
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  May, 26 2008 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>

                        <article class="post">
                          <div class="post__thumbail">
                            <img src="img/jujutsukaisen_gojo.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Hentai</a>
                            <div class="post__title">
                              <a href="">Lorem ipsum dolor sit amet.</a>
                            </div>
                            <p class="post__body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur error dolores ipsa distinctio,sitatibus nam iusto ea assumenda provident voluptas ad.
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  May, 26 2008 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>


                        <article class="post">
                          <div class="post__thumbail">
                            <img src="img/jujutsukaisen_gojo.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Hentai</a>
                            <div class="post__title">
                              <a href="">Lorem ipsum dolor sit amefffffffffffffffffff ft ira makan coklat.</a>
                            </div>
                            <p class="post__body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur error dolores ipsa distinctio,sitatibus nam iusto ea assumenda provident voluptas ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim quos sint possimus doloremque. Sit voluptatem
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  May, 26 2008 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </section>
                </div>

                
            </div>
            <div class="artikelkanan">
                <div class="top-anime" style="background-color: #658ddd00;">
                  
                    <p class="judul">
                      Paling <i style="color: #9c9ef5; font-style:normal;">Sering</i> dilihat
                    </p>

                    <ul style="background-color: #658ddd00;">
                      <li>
                        <ol>
                          <img src="https://w0.peakpx.com/wallpaper/468/979/HD-wallpaper-anime-landscape-falling-stars-sunset-clouds-anime-girl-scenic-anime.jpg" alt="">
                        </ol>
                        <ol>
                          <ul class="daftar"style="background-color: #658ddd00;">
                            <div class="nama">
                              <a href="#">2</a>
                              <p>Kali Dilihat</p>
                            </div>
                          </ul>
                          <ul class="judul-anime"style="background-color: #658ddd00;">
                           10 Free Background Anime
                          </ul>
                        </ol>
                      </li>

                      <li>
                        <ol>
                          <img src="img/meddie.jpg" alt="">
                        </ol>
                        <ol>
                          <ul class="daftar"style="background-color: #658ddd00;">
                            <div class="nama">
                              <a href="#">2</a>
                              <p>Kali Dilihat</p>
                            </div>
                          </ul>
                          <ul class="judul-anime" style="background-color: #658ddd00;">
                            I Wanna Be You Manhwa By Cedar_Kr
                          </ul>
                        </ol>
                      </li>

                      <li>
                        <ol>
                          <img src="https://cdn.idntimes.com/content-images/community/2021/09/rsz-1rsz-sukuna-looking-down-on-yuji-anime-56965fbaa68adf470a17cc45ea5d328d-1ffb3aedd1dec5b1c2a561fb998b9a0a_600x400.png" alt="">
                        </ol>
                        <ol>
                          <ul class="daftar"style="background-color: #658ddd00;">
                            <div class="nama">
                              <a href="#">2</a>
                              <p>Kali Dilihat</p>
                            </div>
                          </ul>
                          <ul class="judul-anime"style="background-color: #658ddd00; 	margin-left: -60%;
                          ">
                          Sukuna Menjadi Dadu
                          </ul>
                        </ol>
                      </li>

                      <li>
                        <ol>
                          <img src="https://pic-bstarstatic.akamaized.net/ugc/17baa7ee21e6e27e5e0fca25b2d671b8.jpg" alt="">
                        </ol>
                        <ol>
                          <ul class="daftar"style="background-color: #658ddd00; 	margin-left: -80%;
                          ">
                            <div class="nama">
                              <a href="#">1</a>
                              <p>Kali Dilihat</p>
                            </div>
                          </ul>
                          <ul class="judul-anime"style="background-color: #658ddd00;
                          ">
                            Cara Membuat Mata
                          </ul>
                        </ol>
                      </li>

                      <li>
                        <ol>
                          <img src="img/meddie.jpg" alt="">
                        </ol>
                        <ol>
                          <ul class="daftar"style="background-color: #658ddd00;">
                            <div class="nama">
                              <a href="#">2</a>
                              <p>Kali Dilihat</p>
                            </div>
                          </ul>
                          <ul class="judul-anime"style="background-color: #658ddd00;
                          ">
                            Naruto Join Akatsuki
                          </ul>
                        </ol>
                      </li>
                    </ul>
                
                </div>
                <br>
                <br>
                <br>

                <div class="top-anime" style="background-color: #658ddd00;">
                  
                  <p class="judul">
                    Paling Sering dilihat
                  </p>

                  <ul style="background-color: #658ddd00;">
                    <li>
                      <ol>
                        <img src="https://w0.peakpx.com/wallpaper/468/979/HD-wallpaper-anime-landscape-falling-stars-sunset-clouds-anime-girl-scenic-anime.jpg" alt="">
                      </ol>
                      <ol>
                        <ul class="daftar"style="background-color: #658ddd00;">
                          <div class="nama">
                            <a href="#">2</a>
                            <p>Kali Dilihat</p>
                          </div>
                        </ul>
                        <ul class="judul-anime"style="background-color: #658ddd00;">
                         10 Free Background Anime
                        </ul>
                      </ol>
                    </li>

                    <li>
                      <ol>
                        <img src="img/meddie.jpg" alt="">
                      </ol>
                      <ol>
                        <ul class="daftar"style="background-color: #658ddd00;">
                          <div class="nama">
                            <a href="#">2</a>
                            <p>Kali Dilihat</p>
                          </div>
                        </ul>
                        <ul class="judul-anime" style="background-color: #658ddd00;">
                          I Wanna Be You Manhwa By Cedar_Kr
                        </ul>
                      </ol>
                    </li>

                    <li>
                      <ol>
                        <img src="https://cdn.idntimes.com/content-images/community/2021/09/rsz-1rsz-sukuna-looking-down-on-yuji-anime-56965fbaa68adf470a17cc45ea5d328d-1ffb3aedd1dec5b1c2a561fb998b9a0a_600x400.png" alt="">
                      </ol>
                      <ol>
                        <ul class="daftar"style="background-color: #658ddd00;">
                          <div class="nama">
                            <a href="#">2</a>
                            <p>Kali Dilihat</p>
                          </div>
                        </ul>
                        <ul class="judul-anime"style="background-color: #658ddd00; 	margin-left: -60%;
                        ">
                        Sukuna Menjadi Dadu
                        </ul>
                      </ol>
                    </li>

                    <li>
                      <ol>
                        <img src="https://pic-bstarstatic.akamaized.net/ugc/17baa7ee21e6e27e5e0fca25b2d671b8.jpg" alt="">
                      </ol>
                      <ol>
                        <ul class="daftar"style="background-color: #658ddd00; 	margin-left: -80%;
                        ">
                          <div class="nama">
                            <a href="#">1</a>
                            <p>Kali Dilihat</p>
                          </div>
                        </ul>
                        <ul class="judul-anime"style="background-color: #658ddd00;
                        ">
                          Cara Membuat Mata
                        </ul>
                      </ol>
                    </li>

                    <li>
                      <ol>
                        <img src="img/meddie.jpg" alt="">
                      </ol>
                      <ol>
                        <ul class="daftar"style="background-color: #658ddd00;">
                          <div class="nama">
                            <a href="#">2</a>
                            <p>Kali Dilihat</p>
                          </div>
                        </ul>
                        <ul class="judul-anime"style="background-color: #658ddd00;
                        ">
                          Naruto Join Akatsuki
                        </ul>
                      </ol>
                    </li>
                  </ul>
              
              </div>


                </div>
            </div>
        </div>
        <div class="kanan">
          
        </div>
    </div>



   






      <!-- Footer Section Begin -->

<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">

     
   

        <div class="row">
 
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/footerimg.png" alt="MyAnim3List" width="425%"></a>
                </div>
            </div>
          
            <div class="col-lg-3">
                <p style="font-size: 24pt; font-weight: 700; "><b>Ira Humanitas</b></p>
                <p><a style="color: rgba(127, 255, 212, 0.644);"href="https://myanimelist.net/" target="_blank">My Anime List Ori</a></p>
                <p> <a style="color: rgba(127, 255, 212, 0.733);"target="_blank"href="https://www.crunchyroll.com/">Crunchyroll</a></p>
                <p> <a target="_blank"style="color: rgba(127, 255, 212, 0.658); padding-top: -20px;"href="https://mangaplus.shueisha.co.jp/updates">Shueisha</a></p>
                <p> <a target="_blank"style="color: rgba(127, 255, 212, 0.658); padding-top: -20px;"href="https://mangaplus.shueisha.co.jp/updates">Extraterrestres</a></p>
                <p> <a target="_blank"style="color: rgba(127, 255, 212, 0.658); padding-top: -20px;"href="https://mangaplus.shueisha.co.jp/updates">Katozukidj Iruma</a></p>

              </div>
              <div class="col-lg-3">
                <p style="font-size: 24pt; font-weight: 700;color: rgba(240, 248, 255, 0); "><b>Ira Humanitas</b></p>
                <p><a style="color: rgba(127, 255, 212, 0.644); "href="https://myanimelist.net/"target="_blank">Sandiana Zetta</a></p>
                <p> <a target="_blank"style="color: rgba(127, 255, 212, 0.733);"href="https://www.crunchyroll.com/">Kamirize Irene</a></p>
                <p> <a target="_blank"style="color: rgba(127, 255, 212, 0.658); padding-top: -20px;"href="https://mangaplus.shueisha.co.jp/updates">Missa Nana</a></p>
                <p> <a target="_blank" style="color: rgba(127, 255, 212, 0.658); padding-top: -20px;"href="https://mangaplus.shueisha.co.jp/updates">k_leouchLotus_Elise</a></p>
                <p> <a target="_blank" style="color: rgba(127, 255, 212, 0.658); padding-top: -20px;"href="https://mangaplus.shueisha.co.jp/updates">Mozaecaren</a></p>

              </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.instagram.com/distraksiekspetasi/?hl=id" target="_blank">Ira Humanitas</a>
             </p>

              </div>
          </div>
      </div>
  </footer>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>