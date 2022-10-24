<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702
/*This code adds a smoothly animated appearance to buttons and some text.*
It contains News and gigs dynamic content as well as contact form and an
Mp3 sample audio file together with links to other pages and descriptions. -->

<!--Card Script to add values of selected item-->
<?php
include('cartcode.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Jazz singer provide live band services for any event in Edinburgh and Cambridge together with New Phoenix Jazz Band, the Christine Adams Trio, Pitchblenders and Blue Bottle.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Meta Keyword-->
<meta name="keywords" content="Jazz music,Music Band,Christine Adams, Edinburgh and Cambridge, Singer, Jazz singer, Live Music,live band services,
gigs in Edinburgh and Cambridge,Gigs in Edinburgh and Cambridge, Live Gigs,music, sing, music gigs,  Jerry Forde’s New Phoenix Jazz Band, the Christine Adams Trio, Pitchblenders, Blue Bottle, Edinburgh Jazz & Blues Festival,
 Edinburgh Festival Fringe, Kirkcudbright, Langtoun Jazz Festivals,contemporary jazz and blues ,blues, funk and soul ,Edinburgh Jazz 'n' Jive Club, gig bookings, CD, MP3. Audio,the Jazz Bar ">
   <!--Canonical-->
 <link rel="canonical" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR1/JazzMusic/index.php">

    <!-- Title -->
    <title>Jazz Singer</title>

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
                                    <li><a href="index.php"><span class='bi bi-music-note' style='color: white'></span>Home</a></li>
                                    <li><a href="music.php">Music</a></li>
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
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
    

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/banner2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms"> live band services for any event</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Jazz Music <span>Jazz Music</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#contact" class="btn oneMusic-btn mt-50">Get In Touch<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/banner.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Gigs in Edinburgh and Cambridge</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Jazz Music <span>Jazz Music</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#events" class="btn oneMusic-btn mt-50">Upcoming Gigs<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### News Area Start ##### -->
    <section class="bg-gray section-padding-102">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                    <h2>Latest News</h2><br><br>
                        
                    <?php 
 include 'connection.php';
 //Extracts the last news added to the database 
$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 1 ";

$result = mysqli_query($connection,  $sql)
or die ("couldn't run query");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
    echo ' <h4 style="color:rgb(214, 38, 38);">' . $row['p1'] . '</h4><br>';
    echo ' <h5>' . $row['p2'] . '</h5><br>';
   echo $row['iframe'];
 }
                        ?>

                    </div>
                </div>
            </div>

                    </div>
    </section>
    <!-- ##### News Area Ends##### -->



<!-- ##### Projects Area Start ##### -->
<section class="section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>See who I am performing with</p>
                    <h2>My Projects </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p>I am a jazz singer from the Scottish Borders based in Edinburgh and Cambridge. Since 2013, I have been the vocalist with Jerry Forde’s New Phoenix Jazz Band, the Christine Adams Trio, Pitchblenders and Blue Bottle, and have performed at the Edinburgh Jazz & Blues Festival, Edinburgh Festival Fringe, Kirkcudbright and Langtoun Jazz Festivals.
                    </p> <p> <a href="index.html#contact">Get in touch</a> if you want to chat about music,events,gig bookings, CD's or anything else!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    <!-- CHRISTINE ADAMS TRIO -->
                    <div class="single-album">
                        <div class="grid-container">
                            <div>
                              <a href="projects.php#trio" class='grid-item grid-item-2'> <img class='grid-item grid-item-1' src='img/bg-img/trio.jpg' alt='Photo trio band'></a>
                              <h5 style="text-align: center;">CHRISTINE ADAMS TRIO</h5>
                              <p>Christine Adams, Phil Adams and Nick Gent </p>
                            </div>
                            </div>
                    </div>
                                         <!-- BLUE BOTTLE -->
                                        <div class="single-album">
                                            <div class="grid-container">
                                                <div>
                                                  <a href="projects.php#BlueBottle" class='grid-item grid-item-2'> <img class='grid-item grid-item-1' src='img/bg-img/bluebottle.jpg' alt='blue bottle photo'></a>
                                                  <h5 style="text-align: center;">BLUE BOTTLE</h5>
                                                  <p> Edinburgh-based 7-piece blues outfit </p><br>
                                                </div>
                                                </div>
                                        </div>
                        <!-- Pitchblenders -->
                    <div class="single-album">
                        <div class="grid-container">
                            <div>
                              <a href="projects.php#pitchblenders" class='grid-item grid-item-2'> <img class='grid-item grid-item-1' src='img/bg-img/Pitchblenders.JPG' alt='pitchblender photo'></a>
                              <h5 style="text-align: center;">Pitchblenders</h5>
                              <p>Pitchblenders is a swing quartet from Edinburgh</p><br>
                            </div>
                            </div>
                    </div>
                                        <!-- CHRISTINE ADAMS -->
                                        <div class="single-album">
                                            <div class="grid-container">
                                                <div>
                                                  <a href="projects.php#trio" class='grid-item grid-item-2'> <img class='grid-item grid-item-1' src='img/bg-img/christine.JPG' alt='band trio photo'></a>
                                                  <h5 style="text-align: center;"> Let's talk about music</h5>
                                <p><small>Edinburgh and Cambridge: I am looking for a new musicians</small></p>
                                             
                                                </div>
                                                </div>
                                        </div>
                        <!-- Jerry Fordes Jazz band -->
                    <div class="single-album">
                        <div class="grid-container">
                            <div>
                              <a href="projects.php#jerry" class='grid-item grid-item-2'> <img class='grid-item grid-item-1' src='img/bg-img/Jerry.jpg' alt='Jerry Forde’s New Phoenix Jazz Band photo'></a>
                              <h5 style="text-align: center;">Jerry Forde’s New Phoenix Jazz Band</h5>
                              <p>Jazz from the first half of the 20th century</p>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Projects Area End ##### -->



    <!-- ##### Sample Music ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/banner2.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/mp3backround.jpg" alt=" christine photo background">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section MP3 -->
                        <div class="section-heading white text-left mb-30">
                            <p>Jazz music for every test</p>
                            <h2 ><a class="link" href="music.php" target="_blank" >Buy my Album</a></h2>
                        </div>
                        <p>
                            My style covers early and contemporary jazz and blues with a little funk and soul mixed in</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Murder Gonna Be My Crime</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/MurderGonnaBeMyCrime.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    

    <!-- ##### Gigs Area Start ##### -->
    <section id="events" class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2>Latest Gigs</h2>
                    </div>
                </div>
            </div>


 <div class="row">
 <?php 
 include 'connection.php';
 //Extracts the latest 6 evens
$sql = "SELECT * FROM gigs ORDER BY date DESC LIMIT 6 ";

$result = mysqli_query($connection,  $sql)
or die ("couldn't run query");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {

          echo      '<div class="col-4 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb"> ';                   
                     echo           '<h4>'. $row['day'] . '</h4>';
                      echo             ' <h5>' . $row['date'] . '</h5>';
                      echo             ' <p>' . $row['band'] . '
                                        <a href='. $row['link'] . '> @ <br>' . $row['venue'] . '</a>
                              <br> <b>' . $row['time'] .'</b></p>';
                               //Social media buttons 
             echo                  '<div class="sharethis-inline-share-buttons">
                               </div>
                               </div>
                            </div>
                        </div>';
 }
                        ?>

                    </div>
             
          <br>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="events.php" class="btn oneMusic-btn">See More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
    <!-- ##### Events Area End ##### -->

    <!-- ##### Contact Area Start ##### -->

    <section id="contact" class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/banner2.jpg);">
        <div class="container">
            <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                <div class="row">
                <div class="col-4">
                  <a href="https://www.facebook.com/christineadamssings" target="_blank"><img src="social/facebook-w.png" width="45" height="45" alt="facebook icon" class="center" /></a>
               
                </div>
                <div class="col-4">
                  <a href="https://www.instagram.com/christine_adams_music/" target="_blank"><img src="social/instagram-w.png" width="45" height="45" alt="instagram icon" class="center" /></a>
                </div>
                <div class="col-4">
                  <a href="https://www.youtube.com/channel/UCC0pmjklytE0XLnkVtlybXQ/videos "  target="_blank"><img src="social/youtube-w.png" width="youtube icon" height="45" alt="logo" class="center" /></a>
                </div>
            </div>
<br>
            <div class="row">
                <div class="col-12">
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                    <form id="contact-form" action="index.php" name="contact" method="POST" onsubmit="javascript: return (confirm('Thank you for contacting us,we will get back to you as soon as possible!') ? this.submit() : false);">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox" required>
                                <label for="checkbox" style="color: white;"> I agree to the terms & conditions</label>
                                </div>
                                </div>

                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit" name="submit" value="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
    <?php
// This code takes the variables from the contact form and sends the user input to the administrator 
//Variable that store name
$name = $_POST['name'];
//Variable that store email
$email = $_POST['email'];
//Variable that store the message"
$message = $_POST['message'];
//Variable that store the subject"
$subject = $_POST['subject'];
//Variable that stores the email of the sender
$headers = "From: $email" . "\r ";
//Variable for the current date
$date =  date('m/d/Y, H:i:s');

 $msg = $name ." : " .$email . "\n\n".$subject . "\n\n".$message . "\n\n" ."Sent on:  ".$date;
 $formattedmsg = wordwrap ($msg,70);

 // send email
 mail('ec1929702@edinburghcollege.ac.uk','website query', $formattedmsg, $headers);


 ?>
 <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="index.php"><img src="img/core-img/newlogo.png"  width="260" alt="logo"></a><p></p>
                    <p class="copywrite-text"><a>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
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

    <!-- ##### Footer Area Start ##### -->

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