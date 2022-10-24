
<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project -->

<!--The bands page containing information about the four bands Christine is performing with -->

<!--Card Script to add values of selected item-->
<?php
include('cartcode.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jazz music projects">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>projects</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!--Bootstrap music note Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/cart.css">


<!-- Share button script-->
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=623472b1c28d5a001c67ad78&product=image-share-buttons" async="async"></script>

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
                                    <li><a href="index.php">   Home</a></li>
                                    <li><a href="music.php">Music</a></li>
                                    <li><a href="index.php#events">Gigs</a></li>
                                    <li><a href="#">Gallery</a>
                                        
                                        <ul class="dropdown">
                                            <li><a href="photo.php">Photo</a></li>
                                            <li><a href="video.php">Video</a></li>
                                            </ul>
                                    <li> <a href="projects.php"><span class='bi bi-music-note' style='color: white'></span>Projects</a>
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
                                                            <li><a href="projects.php#trio">About</a></li>
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
    
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/gallery.jpg)">
        <div class="bradcumbContent">
            <h2>Projects</h2>
        </div>
    </section>
    <section class="oneMusic-buy-now-area has-fluid section-padding-100">
        <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                <a href="projects.php#trio" class="btn oneMusic-btn">Christine Adams Trio <i class="fa fa-angle-double-right"></i></a>
                <a href="projects.php#BlueBottle" class="btn oneMusic-btn">Blue Bottle <i class="fa fa-angle-double-right"></i></a>
                <a href="projects.php#pitchblenders" class="btn oneMusic-btn">Pitchblenders <i class="fa fa-angle-double-right"></i></a>
                <a href="projects.php#jerry" class="btn oneMusic-btn">New Phoenix Jazz <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    </div>
    </section>
<!-- ##### Projects ##### -->
<br id="trio">
<br>
<br>
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/backrounproject.jpg);">
    <div class="container">
        <div class="row align-items-end">
            <br>
            <br>
            <br>
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="img/bg-img/trio.jpg" alt="Jazz Band Trio">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>Edinburgh Jazz</p>
                        <h2 >Christine Adams Trio</a></h2>
                    </div>
                    <p style="font-size: 18px;">
                        Christine has been singing with Phil Adams and Nick Gent on guitars since 2013. The trio originally formed as The Garden Swing for a weekly session at the Dalriada on Portobello’s promenade as well as the Vincaffè on Multrees Walk.</p>

                        <a href="index.php#contact" target="_blank" ><img src="social/envelope.png" width="45" height="45" alt="logo" /></a>


                </div>
            </div>
        </div>
    </div>
    <br id="BlueBottle">
    <br>
    <br>
    <br>
    <br>
    <div class="container" >
        <div class="row align-items-end">

            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p >Edinburgh Jazz</p>
                        <h2 >Blue Bottle</a></h2>
                    </div>
                    <p style="font-size: 18px;">
                        Blue Bottle is an Edinburgh-based 7-piece blues outfit fronted by guitarist Phil Adams. Leading talents from Scotland’s jazz and blues scene supply original arrangements, inventive guitar, smashing horns, a slick rhythm section and superb vocals. 
                        You can expect an era-defying repertoire with excursions into soul and jazz where JJ Cale, Ry Cooder and Eva Cassidy jostle for position alongside Big Mama Thornton, Tommy Tucker, BB King and Sippie Wallace.</p>

                        <a href="https://www.facebook.com/Blue-Bottle-108492714042056" target="_blank"><img src="social/facebook-w.png" width="45" height="45" alt="facebook" /></a>

                        &nbsp&nbsp&nbsp <a href="https://soundcloud.com/user-415651234" target="_blank"><img src="social/soundcloud_logo_icon_154496.png" width="45" height="45" alt="soundcloud" /></a>

                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="img/bg-img/bluebottle.jpg" alt="bluebottle">
                </div>
            </div>
        </div>
    </div>
<br id="pitchblenders">
<br>
<br>
<br>
<br>
<div class="container" >
    <div class="row align-items-end">
        <div class="col-12 col-md-5 col-lg-4">
            <div class="featured-artist-thumb">
                <img src="img/bg-img/Pitchblenders.JPG" alt="pitchblenders">
                <br><br><br><a href="https://www.instagram.com/pitchblenders.jazz/" target="_blank"><img src="social/instagram-w.png" width="45" height="45" alt="logo" /></a>
                &nbsp&nbsp&nbsp <a href="https://www.facebook.com/Pitchblenders/" target="_blank"><img src="social/facebook-w.png" width="45" height="45" alt="logo" /></a>
            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-8">
            <div class="featured-artist-content">
                <!-- Section Heading -->
                <div class="section-heading white text-left mb-30">
                    <p >Edinburgh Jazz</p>
                    <h2>Pitchblenders</a></h2>
                </div>
                
                <p style="font-size: 18px;">
                    Pitchblenders is a swing quartet that’s been playing in and around Edinburgh since they got together for a lively Friday night gig every week at Mother's
                    Gin Bar in 2016. The band features seasoned musos Phil Adams on guitar, Colin Steele on trumpet and Jerry Forde on bass, with Christine Adams on vocals. They supply classic swing, blues and bossa along with French and Latin vocals. In 2018 and 2019, they had a gem of a Fringe show at Valvona & Crolla’s cosy attic venue. In 2021 they did a concert "online on demand" for the Fringe. Expect shimmying, sass and good-humoured banter.</p>
                  <p>We got a <b style="font-size: 20px;">4-star review</b> by Jim Gilchrist for the <a style="color:rgb(228, 121, 121);" href="https://www.scotsman.com/whats-on/arts-and-entertainment/music-review-pitchblenders-valvona-crolla-265850" target="_blank"><i>Scotsman (2018)</i></a>: “For an intimate hour’s show, you 
                        couldn’t ask for more – but we did.” </p>
                        
            </div>
        </div>
    </div>
</div>
<br id="jerry">
<br>
<br>
<br>
<br>
<div class="container" >
    <div class="row align-items-end">

        <div class="col-12 col-md-7 col-lg-8">
            <div class="featured-artist-content">
                <!-- Section Heading -->
                <div class="section-heading white text-left mb-30">
                    <p >Edinburgh Jazz</p>
                    <h2 >Jerry Forde’s New Phoenix Jazz Band</a></h2>
                </div>
                
                <p style="font-size: 18px;">Jerry Forde’s New Phoenix Jazz septet formed in late 2011 from a wide range of musicians active in the serious and diverse jazz musical traditions. The band focuses on the period from the late 1800s to appropriate music up to the present day, concentrating on the first half of the 20th century. </p>
                  <p style="font-size: 18px;">Christine joined New Phoenix in late 2013 while studying at the University of Edinburgh. She is influenced particularly by early jazz and blues singers of the twenties and thirties as well as Billie Holiday, Ella Fitzgerald and Nina Simone, among others. </p>
                        
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-4">
            <div class="featured-artist-thumb">
                <img src="img/bg-img/Jerry.jpg" alt="Jerry Forde’s New Phoenix Jazz">
                <br><br><br><a href="https://newphoenixjazz.co.uk/" target="_blank"><img src="social/instagram-w.png" width="45" height="45" alt="logo" /></a>&nbsp&nbsp&nbsp
                        <a href="https://www.facebook.com/Pitchblenders/" target="_blank"><img src="social/facebook-w.png" width="45" height="45" alt="facebook" /></a>
            </div>
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
                    <a href="index.php"><img src="img/core-img/newlogo.png"  width="260px" alt="logo"></a><p></p>
                    <div class="fb-like" data-href="https://www.facebook.com/christineadamssings" data-width="50px" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
</a>
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