<!-- Collage Project
     Cristine Adam's Website 05/2022 
     Developer by: Violeta Lazarova - ec1929702

This page contains an accordion menu with instructions on how to update and delete content in the admin panel tables -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="information about editing content on the website ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Update/Delete Manual</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
 <!--Bootstrap music note Icon -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/manual.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

   <!-- ##### Header Area Start ##### -->
   <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="admin.html" class="nav-brand"><img src="img/core-img/newlogo.png" alt="logo"></a>

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
                                    <li><a href="admin.html">Home</a></li>
                                    <li> <a href=""> Action</a>
                                    <ul class="dropdown">
                                                <li><a href="">Photo</a>
                                                    <ul class="dropdown">
                                                        <li><a href="updatephoto.php">Update</a></li>
                                                        <li><a href="addphoto.php">Add</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">Video</a>
                                                    <ul class="dropdown">
                                                        <li><a href="updatevideo.php">Update</a></li>
                                                        <li><a href="addvideo.php">Add</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">News</a>
                                                    <ul class="dropdown">
                                                        <li><a href="updatenews.php">Update</a></li>
                                                        <li><a href="addnews.php">Add</a></li>
                                                    </ul>
                                                </li>
                                                    <li><a href="">Events</a>
                                                        <ul class="dropdown">
                                                            <li><a href="updateevent.php">Update</a></li>
                                                        <li><a href="addevent.php">Add</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="">Music</a>
                                                        <ul class="dropdown">
                                                            <li><a href="updatemp3.php">Update</a></li>
                                                        <li><a href="addmp3.php">Add</a></li>
                                                        </ul>
                                                    </li>
                                                </ul></li>
                                    <li><a href="">Website</a>
                                        <ul class="dropdown">
                                        <li><a href="index.php" target="_blank">Home </a></li>
                                        <li><a href="events.php" target="_blank">Events</a></li>
                                            <li><a href="photo.php" target="_blank">Photo</a></li>
                                            <li><a href="video.php" target="_blank">Video</a></li>
                                            <li><a href="music.php" target="_blank">Music</a></li>
                                            </ul>
                                            <li><a href="">Social</a>
                                        <ul class="dropdown">
                                        <li><a href="https://www.youtube.com/channel/UCC0pmjklytE0XLnkVtlybXQ/videos" target="_blank">Youtube </a></li>
                                        <li><a href="https://www.instagram.com/christine_adams_music/" target="_blank">Instagram</a></li>
                                            <li><a href="https://www.facebook.com/christineadamssings/" target="_blank">Facebook</a></li>

                                            </ul>
                                            <li><a href=""><span class='bi bi-music-note' style='color: white'></span> Manual</a>
                                        <ul class="dropdown">
                                            <li><a href="update.php" target="_blank"><span class='bi bi-music-note' style='color: white'></span>Update/Delete</a></li>
                                            <li><a href="add.php" target="_blank"> Add</a></li>
</ul>
<li><a href="logout.php">Logout</a></li>
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
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/gallery.jpg);">
        <div class="bradcumbContent">
            <h2>Update/Delete</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Update Accordion Menu Starts ##### -->
    <br>
    <br>
    <br>
    <br>
    <br>
<button class="accordion">Update</button>
<div class="panel">
  <h5 style = "color:blue";>
  <br>Updating content is NOT a reversible action!! <br> However, you can update a content as many times as you like.
</h5>
</div>
<br>
 
      <!-- ##### Update Accordion Menu Ends ##### -->
  
    <!-- ##### Delete Accordion Menu Starts ##### -->

<button class="accordion">Delete</button>
<div class="panel">
  <h5 style = "color:red";>
  <br>Deleting content is not a reversible action!! <br> If you are not sure about taking this action, you may want to consider updating the content instead.
</h5>
</div>


<br>
    <br>
    <br>
    <br>
      <!-- ##### Delete Accordion Menu Ends ##### -->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>



    <!-- Footer -->
<?php include 'footer.html';?>



</body>

</html>