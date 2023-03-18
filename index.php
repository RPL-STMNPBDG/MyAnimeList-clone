
<?php
    include "admin/koneksi.php";

    $featured_query = "SELECT * FROM artikel";
    $featured_result = mysqli_query($varkoneksi, $featured_query);
    $featured = mysqli_fetch_assoc($featured_result);

    // $id = 19;
    // $idartikel = $id++;
    // $result = mysqli_query($varkoneksi,"SELECT * FROM artikel");

    $genre_query = "SELECT * From user";
    $genre_result = mysqli_query($varkoneksi, $genre_query);
    $genre = mysqli_fetch_assoc($genre_result);

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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
    

    <header>
        <div class="header-content">
          
          <a href="#" class="logo">
            <img src="img/medeia_png.png" alt="MyAnim3List" width="24%">
            <p class="logo-name">MYA<i style="color: #d44efd;">NIM3</i>LIST</p>
          </a>
          
          <input type="checkbox" id="hamburger" aria-label="menu button">
          <label for="hamburger"><span></span></label>
          
          <nav aria-label="main navigation">
            <ul class="menus" style="background: rgb(0,0,0);
            background: linear-gradient(252deg, rgba(0,0,0,0) 14%, rgba(73,12,149,1) 48%, rgba(0,0,0,1) 75%);">
              <li><a class="home"href="#">Home</a></li>
              <li>
                <button 
                  type="button" 
                  aria-haspopup="true" 
                  aria-expanded="true" 
                  aria-controls="dropdown1"  
                  class="servis"
                >
                  Services<span class="arrow"></span>   
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
                >
                  Contacts<span class="arrow"></span>   
                </button>
                <ul class="dropdown" id="dropdown1">
                  <li><a href="#">Facebook</a></li> 
                  <li><a href="#">Discord</a></li>
                  <li><a href="#">WhatsApp</a></li>
                  <li><a href="#">Instagram</a></li>
                </ul>
              </li>
              <li><a href="#">About</a></li>
            </ul>

            <ul class="sign">
                <li class="signin">
                    <a href="login.php">Sign In</a>
                </li>
                <li class="hide">ref</li>

                <li class="signup">
                    <a class="up"href="signup.php">Sign Up</a>
                </li>
            </ul>
        
          </nav>

          

        </div>
      </header>



    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="https://media.tenor.com/N0HVm0AkP1wAAAAd/solo-leveling.gif">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Laga</div>
                                <div class="label">Fantasy</div>
                                <h2>Solo Leveling Summer 2023 By A-1 Pictures</h2>
                                <p>
                                    Sepuluh tahun yang lalu, "Gerbang" muncul dan menghubungkan dunia nyata dengan dunia sihir dan monster. Untuk memerangi binatang buas yang keji ini, orang biasa menerima kekuatan manusia super...</p>
                                <a href="#"><span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="https://i.pinimg.com/originals/5f/48/93/5f489310b5c6761829677a27fbd24a15.gif">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Action</div>
                                <h2>Fate/stay night Movie: Heaven's Feel - III. Spring Song</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/jujutsukaisen_gojosatoru.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Shounen</div>
                                <div class="label">Supernatural</div>
                                <h2>Jujutsu Kaisen Spring 2020 By MAPPA</h2>
                                <p>Iseng-iseng terlibat dalam kegiatan paranormal tak berdasar dengan Klub Gaib, siswa sekolah menengah Yuuji Itadori menghabiskan hari-harinya di ruang klub atau rumah sakit, di mana dia mengunjungi...</p>
                                <a href="#"><span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
 
    <div class="kirikanan">
        <div class="kiri">
            
        </div>
        <div class="artikel">
            <div class="artikelkiri">
                <div class="nav-bar">
                    <ul class="menus" style="background: rgb(0,0,0);
                    background: linear-gradient(120deg, rgba(0,0,0,1) 49%, rgba(73,12,149,1) 90%);">
                        <li><a class="home"href="#">Dashboard</a></li>
                        <li>
                          <button 
                            type="button" 
                            aria-haspopup="true" 
                            aria-expanded="true" 
                            aria-controls="dropdown1"  
                            class="servis"
                          >
                            Content<span class="arrow"></span>   
                          </button>
                          <ul class="dropdown" id="dropdown1"style="background-color: #25064c">
                            <li><a href="#">List Anime</a></li> 
                            <li><a href="#">Blog Anime</a></li>
                          </ul>
                        </li>
                        <li>
                          <button 
                            type="button" 
                            aria-haspopup="true" 
                            class="servis"
                            aria-expanded="true" 
                            aria-controls="dropdown1"  
                          >
                            Genre<span class="arrow"></span>   
                          </button>
                          <ul class="dropdown" id="dropdown1"style="
                          background: #25064c;">
                          <?php
                        $siswa_query = mysqli_query($varkoneksi,"select * from genre");
                        while($siswa_data = mysqli_fetch_array($siswa_query))
                        {
                    ?>    
                            <li><a href="#">
                            <?php echo $siswa_data['judul_genre']?>
                            </a></li> 

                          <?php
                        }
                    ?>
                          </ul>
                        </li>
                        <li style="color: #658ddd00;">
                          aaaaaaaaaaaaaaaaaaaaaaaaa
                        </li>
                        <li>
                            <form class="form-search"action="">
                                <input type="search" placeholder="Search here ...">
                                <i class="fa fa-search"></i>
                            </form>
                        </li>
                        
                      </ul>
                </div>
                <div class="list-anime">
                    <br>
                    
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
                        diterbitkan dengan judul Demon Slayer: Kimetsu no Yaiba, adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Koyoharu Gotōge
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
                            <a href="" class="category__button">Gore</a>
                            <div class="post__title">
                              <a href="">White Melody Of The Cursed</a>
                            </div>
                            <p class="post__body">
                              Dia datang lagi. Tepat malam Jum'at, hari ini dirumahku-salah satu anggota keluargaku, Ternyata ada seorang pembunuh
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Medeia Beliard
                                
                                <small>
                                  Des, 13 2022 | 07.00.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>

                        <article class="post">
                          <div class="post__thumbail">
                            <img src="https://w0.peakpx.com/wallpaper/266/285/HD-wallpaper-sakata-gintoki-sword-artwork-manga-protagonist-gintama-samurai-gintama-series.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Action</a>
                            <a href="" class="category__button">White</a>

                            <div class="post__title">
                              <a href="">Beware The Villainnes</a>
                            </div>
                            <p class="post__body">
                            Kitab ini adalah bentuk dari paham yang sudah bertahun-tahun
tersimpan di dalam pikiran saya, dalam kehidupan yang bergelora. Disinilah dikerangkakan arti dan daerahnya materialisme, arti dan daerahnya dialektika, serta arti dan daerahnya Logika
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/11/25/1094586184.jpg" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Art Ohio
                                
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
                            <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/10/17/3284093757.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Sport</a>
                            <div class="post__title">
                              <a href="">Blue Lock</a>
                            </div>
                            <p class="post__body">
                            Blue Lock adalah sebuah seri manga shōnen Jepang yang ditulis oleh Muneyuki Kaneshiro dan diilustrasikan oleh Yūsuke Nomura. Manga ini mulai dimuat dalam majalah Weekly Shōnen Magazine terbitan Kodansha...
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="https://i.pinimg.com/originals/6d/ce/19/6dce19fc1e5f9f65a9eac806fe5d9580.jpg" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  Des, 21 2000 | 13.13.01
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
                            <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/17/1615246636.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Dark Fantasy</a>
                            <div class="post__title">
                              <a href="">Shingeki no Kyojin: The Final Season - Kanketsu-hen</a>
                            </div>
                            <p class="post__body">
                            Petualangan Eren Yeager, adik tirinya, Mikasa Ackerman, dan teman masa kecil mereka, Armin Arlert. Setelah dinding yang melindungi Shinganshina dihancurkan oleh Titans, mereka pergi membalas dendam.
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="img/footerimg.png" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Isayama Hajime
                                
                                <small>
                                  March, 13 2014 | 07.40.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>

                        <article class="post">
                          <div class="post__thumbail">
                            <img src="https://pbs.twimg.com/media/EbSfbgpXkAI2vlS.jpg" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Fantasi</a>
                            <a href="" class="category__button">Action</a>
                            <div class="post__title">
                              <a href="">Enryu (엔류, Ehn-ryoo) is an Irregular.</a>
                            </div>
                            <p class="post__body">
                            Wolhaiksong (월하익송, Weolha'iksong; yang paling disukai 月下翼松, "Pohon Bersayap Di Bawah Rembulan"), atau Wing Tree (윙트리, Wingteu'ri, Pohon Sayap) adalah sebuah organisasi di dalam Menara yang bermarkas di Lantai 77...
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="https://i.pinimg.com/originals/6d/ce/19/6dce19fc1e5f9f65a9eac806fe5d9580.jpg" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Ira Humanitas
                                
                                <small>
                                  Jan, 02 1974 | 17.09.00
                                </small>
                                </p>
                              </div>
                            </div>
                          </div>
                        </article>


                        <article class="post">
                          <div class="post__thumbail">
                            <img src="data:image/jpeg;base64,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" alt="">
                          </div>
                          <div class="post__info">
                            <a href="" class="category__button">Music</a>
                            <div class="post__title">
                              <a href="">Shigatsu WA Kimi No Uso</a>
                            </div>
                            <p class="post__body">
                            Shigatsu wa Kimi no Uso adalah sebuah serial manga drama romansa Jepang yang ditulis dan diilustrasikan oleh Naoshi Arakawa da...
                            </p>
                            <div class="post__author">
                              <div class="post__author-avatar">
                                <img src="https://1.bp.blogspot.com/-Gb6lsnIHxhQ/WgMQUtqM_0I/AAAAAAAALLI/uIDtggrWAPct-YSgivdk1CCWF3zQsiDbwCLcBGAs/s1600/kaoriletter3.jpg" alt="">
                              </div>
                              <div class="post__author-info">
                                <p>
                                  By : Naoshi Arakawa
                                
                                <small>
                                  April, 26 2016 | 07.20.00
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