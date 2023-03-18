<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/add-post.css">
    <link rel="stylesheet" href="css/gaya.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/add-isi.css">
    <link rel="stylesheet" href="css/sindex.css" type="text/css">
</head>
<body>
    
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


      <section class="admin-artikel">

        <div class="blank1">

        </div>

        <div class="admin-post">

            <div class="dashboard">
                <div class="container dashboard_container">
                    <aside>
                        <ul class="admin-post-list">
                            <li>
                                <a href="add-post.php">
                                <span class="material-symbols-outlined">edit</span>
                                <h5>Add Post</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-post.php">
                                <span class="material-symbols-outlined">edit_note</span>
                                <h5>Manage Post</h5>
                                </a>
                            </li>
                            <li>
                                <a href="add-user.php">
                                <span class="material-symbols-outlined">person_add</span>
                                <h5>Add User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-user.php">
                                <span class="material-symbols-outlined">face_2</span>
                                <h5>Manage User</h5>
                                </a>
                            </li>
                            <li class="add-category">
                                <a href="add-categories.php">
                                <span class="material-symbols-outlined">forms_add_on</span>
                                <h5>Add Genre</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-categories.php">
                                <span class="material-symbols-outlined">category</span>
                                <h5>Manage Genres</h5>
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <main>
                        <!-- Add/Apapun -->

                    


                    </main>
                </div>
            </div>


            <div class="admin-isi">
            <h2 class="title">
                    <span class="title-word title-word-1">Add</span>
                    <span class="title-word title-word-2">Genre</span>
                      
                  </h2>

                <form action="add-categories-logic.php" class="form-add-post" method="post">
                  <input type="text" name="judulgenre" id="" placeholder="Nama Genre" class="judul-artikel">
                  <br>
       
                  <textarea class="text-area"name="deskripsi" id="" cols="30" rows="10" placeholder="Deskripsi Genre"></textarea>

                  <input type="submit" value="Create" class="submit-addpost" name="Submit">
  
                </form>
                
            </div>
        </div>
        
        <div class="blank2">

        </div>

      </section>


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

</body>
</html>