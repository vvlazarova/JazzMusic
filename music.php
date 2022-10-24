<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project -->

<!--The music page containing audio and options to by an mp3 or an album -->

<!--Card Script to add values of selected item-->
<?php
include('cartcode.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jazz music album, buy mp3">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Jazz music</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!--Bootstrap music note Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/cart.css">



</head>

<body>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/newlogo.png" alt="logo"></a>

   <!-- Navbar Toggler -->
   <div class="classy-navbar-toggler">
    <span class="navbarToggler"><span></span><span></span><span></span></span>
</div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="music.php"> <span class='bi bi-music-note' style='color: white'></span> Music</a></li>
                                    <li><a href="index.php#events">Gigs</a></li>
                                    <li><a href="#">Gallery</a>
                                        
                                        <ul class="dropdown">
                                            <li><a href="photo.php">Photo</a></li>
                                            <li><a href="video.php">Video</a></li>
                                            </ul>
                                    <li> <a href="projects.php">Projects</a>
                                        <ul class="dropdown">
                                                <li><a href="projects.php#pitchblenders">Pitchblenders</a>
                                                    <ul class="dropdown">
                                                        <li><a href="projects.php#pitchblenders">About</a></li>
                                                        <li><a href="https://www.facebook.com/Pitchblenders/" target="_blank">Facebook</a></li>
                                                        <li><a href="https://www.instagram.com/pitchblenders.jazz/" target="_blank">Instagram</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="projects.php#BlueBottle">Blue Bottle</a>
                                                    <ul class="dropdown">
                                                        <li><a href="projects.php#BlueBottle">About</a></li>
                                                        <li><a href="https://www.facebook.com/Blue-Bottle" target="_blank">Facebook</a></li>
                                                        <li><a href="https://soundcloud.com/user-415651234" target="_blank">Soundcloud</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="projects.php#jerry">Jerry Forde’s...</a>
                                                    <ul class="dropdown">
                                                        <li><a href="projects.php#jerry">About</a></li>
                                                        <li><a href="http://www.newphoenixjazz.co.uk/" target="_blank">Website</a></li>
                                                        <li><a href="https://www.facebook.com/Jerry-Fordes-New-Phoenix-Jazz-Band-291609401047924/" target="_blank">Facebook</a></li>
                                                    </ul>
                                                </li>
                                                    <li><a href="projects.php#trio">Christine Adams Trio</a>
                                                        <ul class="dropdown">
                                                            <li><a href="projects.html#trio">About</a></li>
                                                        </ul>
                                                    </li>
                                                </ul></li>
                                    <li><a href="index.php#contact">Contact</a></li>
 <!-- Shopping Card-->
 <?php
include('shoppingcart.php');
?>

                                </li>
                            </ul>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                </div>
            </div>
    </header>
    <!-- ##### Header Area End ##### -->
    
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
        
        <!-- ##### Breadcumb Area Start ##### -->
        <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/gallery.jpg)">
            <div class="bradcumbContent">
                <h2>Album</h2>
            </div>
        </section>



        <!-- ##### Album Area Start ##### -->
    <br>
    <br>
    <br>
    <div class="description">
        <div class="container">
          <br>
          <br>
          <div class="row">
            <div class="col-md-6 col-sm-6 flip-card">
              <br>
              <br>
              <div class="boxing">
                <img class="img-responsive" src="img/bg-img/cd1.png" alt="cd image" />
                <div class="box-content">
                  <div class="content">
                    <h5 class="title">Tracks</h5>
                    <span class="post">
                     <small><b>1.</b>If you are a viper (Stuff Smith)<br>
                     <b>2.</b>Best Buddies<br>
                     <b>3.</b>Rubinstein Melody<br>
                     <b>4.</b>Happy Jazz<br>
                     <b>5.</b>Low Lit Blues<br>
                     <b>6.</b>Crystal Coffee<br>
                    </small>
                        </span>
                    <ul >
                   </li>
                    </ul>
                  </div> 
                </div>
              </div>
              <br>
              <br>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="section-heading">
              <br>
              <br>
              <h3>You can get your hands on a copy for £10 at gigs, or buy online our digital album for £9<br /></h3>
              <h5>Recorded and mixed in 2018 by the capable hands of Dave Wah at Red Oktober Music Studio, Edinburgh.</h5>
              <br>
              <p style="font-size: 16px;">
                Pitchblenders consists of Phil Adams on guitar, Colin Steele on trumpet, Jerry Forde on bass and Christine Adams on vocals,
                 with this album also featuring Dick Lee’s inimitable soprano sax playing. Our material covers early and Chicago blues, bossa and ballads and buckets of swing.</p>
              <br>
              <?php
              $result = mysqli_query($connection,"SELECT * FROM `mp3` WHERE code = 'album' ");
while($row = mysqli_fetch_assoc($result)){

    echo "<div '>
    <form method='post' action='music.php#message'>
    <input type='hidden' name='code' value=".$row['code']." />";

                    echo '<button type="submit" class="btn oneMusic-btn"> <img src="img/core-img/cartbutton.png" width="27px"/> Add to Cart £' .$row['price']. '</button>
                    </form>
                    <div class="row align-items-end">
                    <div class="col-1 col-md-5 col-lg-4">
                    </div>
                    </div>';
                }
                    ?>
                </div>
            </div>
          </div>
          <br /><br />
          <br>
        </div>
        </div>
    
<!-- ##### Album Area Ends ##### -->



    <!-- ##### Song Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/backrounproject.jpg);">
    <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                <h1 style="color:white;"> Buy an MP3</h1>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row align-items-end">
            <br>
            <br>
            <br>


                <!-- Single Song Area -->



                        <?php
$result = mysqli_query($connection,"SELECT * FROM `mp3` WHERE code != 'album' ");
while($row = mysqli_fetch_assoc($result)){
    echo'                         <div class="col-12 col-md-5 col-lg-4">
    <div >
        <div class="song-play-area">';
    echo "<div '>
    <form method='post' action='music.php#message'>
    <input type='hidden' name='code' value=".$row['code']." />";
   echo '<div class="song-name">';
 echo   '<p>' .$row['name'].'</p>';
echo '</div>';
echo '<audio preload="auto" controls>';
  echo  '<source src="audio/' .$row['mp3']. '">';
echo '</audio>';
echo    '<br>
    <button type="submit" class="btn oneMusic-btn"><img src="img/core-img/cartbutton.png" width="27px"/> Add to Cart £' .$row['price']. '</button>
    </form>
    <div class="row align-items-end">
    <div class="col-1 col-md-5 col-lg-4">
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
';

        }
mysqli_close($connection);
?>

<div id="message" style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

  </div>


                     


            </div>
    </section>

    <br>
    <br>
    <br>
    <br>
       <br>
    <br>
    <br>
    <br>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="index.html"><img src="img/core-img/newlogo.png"  width="260" alt="logo"></a><p></p>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="terms.html" target="_blank">Terms of service</a></li>
                            <li><a href="https://www.privacypolicygenerator.info/live.php?token=k4OLJGlWCj16tpCkotPgozHh1wryNXut" target="_blank">Privacy Policy</a></li>
                                                        <li><a href="login.html">Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- ##### Footer Area Ends ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>