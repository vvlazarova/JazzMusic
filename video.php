
<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project -->

<!--Dynamic content video gallery page-->

<!--Card Script to add values of selected item-->
<?php
include('cartcode.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jazz music videos, Christine Adams Edinburgh and Cambridge Singer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Jazz music Video</title>

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
                                    <li><a href="index.php">   Home</a></li>
                                    <li><a href="music.php">Music</a></li>
                                    <li><a href="index.php#events">Gigs</a></li>
                                    <li><a href="#"><span class='bi bi-music-note' style='color: white'></span>Gallery</a>
                                        
                                        <ul class="dropdown">
                                            <li><a href="photo.php">Photo</a></li>
                                            <li><a href="video.php"><span class='bi bi-music-note' style='color: black'></span>Video</a></li>
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
        
        <!-- ##### Breadcumb Area Start ##### -->
        <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/gallery.jpg)">
            <div class="bradcumbContent">
                <h2>Video Gallery</h2>
            </div>
        </section>
<br>
<br>
<br>
<!-- Content -->
<div class="container">
   
    <div class="tz-gallery" >
        <div class="align-items-center justify-content-center">
        <div class="row">


        <?php 
 include 'connection.php';
$sql = "SELECT * FROM video ORDER BY id DESC";

$result = mysqli_query($connection,  $sql)
or die ("couldn't run query");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
    
      echo      '<div class="col-sm-6 col-md-4">';
            echo          $row['iframe'] ;   
            echo '            <br>
            <br>
            <br>
            <br>';
           echo  '</div> ';
        }
        ?>
        
        </div>
    </div>
    </div>
    </div>
  <br>
<br>
<br>
<br>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="index.html"><img src="img/core-img/newlogo.png"  width="260px" alt="logo"></a><p></p></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="terms.html" target="_blank">Terms of service</a></li>
                            <li><a href="https://www.privacypolicygenerator.info/live.php?token=k4OLJGlWCj16tpCkotPgozHh1wryNXut" target="_blank">Privacy Policy</a></li>
                                                        <li><a href="#">Admin</a></li>
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