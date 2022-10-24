<!-- Collage Project
     Cristine Adam's Website 05/2022 
     Developer by: Violeta Lazarova - ec1929702

This page contains an accordion menu with instructions on how to add content in the admin panel tables -->


<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="description" content="add content on the website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Manual add content</title>

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
                                    <li><a href="#">Website</a>
                                        <ul class="dropdown">
                                        <li><a href="index.php" target="_blank">Home </a></li>
                                        <li><a href="events.php" target="_blank">Events</a></li>
                                            <li><a href="photo.php" target="_blank">Photo</a></li>
                                            <li><a href="video.php" target="_blank">Video</a></li>
                                            <li><a href="music.php" target="_blank">Music</a></li>
                                            </ul>
                                            <li><a href="#">Social</a>
                                        <ul class="dropdown">
                                        <li><a href="https://www.youtube.com/channel/UCC0pmjklytE0XLnkVtlybXQ/videos" target="_blank">Youtube </a></li>
                                        <li><a href="https://www.instagram.com/christine_adams_music/" target="_blank">Instagram</a></li>
                                            <li><a href="https://www.facebook.com/christineadamssings/" target="_blank">Facebook</a></li>

                                            </ul>
                                            <li><a href="#"><span class='bi bi-music-note' style='color: white'></span> Manual</a>
                                        <ul class="dropdown">
                                            <li><a href="update.php" target="_blank">Update/Delete</a></li>
                                            <li><a href="add.php" target="_blank"><span class='bi bi-music-note' style='color: white'></span> Add</a></li></ul>
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
            <h2>Learn How To Add Item</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Collapsibles/Accordion Menu Starts ##### -->
    <br>
    <br>
    <br>

<button class="accordion">Photo</button>
<div class="panel">
  <h5>Image:</h5><p> Here you upload the image that will show on the website. It is a required field! <br>
<h5>Text:</h5>This will be visible on the website under the photo, it's usually a photo description or a name
You can skip this field.</p>
<h5>Band:</h5> <p>This is a required field  -	Click on the arrow next to the empty field;
-	Choose the band name related to this photo from the dropdown menu;</p>
  <h5> Venue: </h5><p>-You can skip this field or add information about the venue the photo was taken at e’g venue name. </p>
<h5>Date:</h5><p>-You can skip this field or add the date when the photo was taken.
	How to add a date :
-	Click on the little calendar icon in the empty box under the date field;
-	Find the correct year and month by clicking the arrows on the right upper corner;
-	Click on the correct date of the month;</p>
 <br>

</div>

<button class="accordion">Video</button>
<div class="panel">
<h5>Iframe:</h5><p>This is a required field. To add a video , go to the youtube video , press "share" , then "embed", you will see the iframe link. 
    Delete the the width and hight and instead add size ="100%".<br> For example: <br> Before - iframe width="560" height="315" src="https://www.youtube.com/embed/uFiIds52Ewk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>After - iframe size ="100%" src="https://www.youtube.com/embed/uFiIds52Ewk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
    <h5>Band:</h5> <p>This is a required field  -	Click on the arrow next to the empty field;
-	Choose the band name related to this video from the dropdown menu;</p>
   <h5>Name:</h5>You can skip this field or add the videos name for the record.</p>
</div>

<button class="accordion">News</button>
<div class="panel">
<h5>First Paragraph:</h5><p>Maximum 500 characters, Do not use apostrophes, it won't be recognised 
    and the field will not be updated. This will appear as a first-line in red colour.</p>
    <h5>Second Paragraph:</h5><p>Maximum 500 characters, Do not use apostrophes, it won't be recognised 
    and the field will not be updated. This will appear as a second-line in black colour </p>
   <h5>Iframe:</h5> <p>You can skip this field or add add a Iframe link to facebook news or youtube video related to the news.
   <br> To add a video , go to the youtube video , press "share" , then "embed", you will see the iframe link. 
    Delete the the width and hight and instead add size ="100%".<br> For example: <br> Before - iframe width="560" height="315" src="https://www.youtube.com/embed/uFiIds52Ewk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>After - iframe size ="100%" src="https://www.youtube.com/embed/uFiIds52Ewk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
   </p>
</div>

<button class="accordion">Events</button>
<div class="panel">
<h5>Day Of week:</h5> <p>This is a required field.</p>
    <h5>Date:</h5><p>-This is a required field, add the date of this event.
	How to add a date :
-	Click on the little calendar icon in the empty box under the date field;
-	Find the correct year and month by clicking the arrows on the right upper corner;
-	Click on the correct date of the month;</p>
   <h5>Band:</h5> <p>This is a required field  -	Click on the arrow next to the empty field;
-	Choose the band name related to this event from the dropdown menu;</p>
   <h5>Venue:</h5><p>This is a required field </p>
   <h5>Link:</h5><p>You can skip this field or add a link to the event venue website, it will show on the website.</p> 
   <h5>Time:</h5><p>This is a required field </p>
</div>

<button class="accordion">Music</button>
<div class="panel">
<h5>Name:</h5><p>This is a required field. Name of the song</p>
    <h5>Unique code:</h5><p>This is a required field, you can add the song name or any other unique name related without any space or special characters</p>
   <h5>Price:</h5><p>This is a required field. Add the price of the file. </p>
   <h5>MP3 File:</h5><p>This is a required field. Add a short music sample.Your file must be in an MP3 or MP4 format with a maximum size of 2,00 MB </p>

</div>
<br>
    <br>
    <br>
    <br>
      <!-- ##### Collapsibles/Accordion Menu Ends ##### -->
  


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