<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702
This page contents a script that allows a data to be added to the "news" database table. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="add news on the website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Add news</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
 <!--Bootstrap music note Icon -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/table.css">

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
                                    <li> <a href=""> <span class='bi bi-music-note' style='color:white'></span> Action</a>
                                        <ul class="dropdown">
                                                <li><a>Photo</a>
                                                    <ul class="dropdown">
                                                        <li><a href="updatephoto.php">Update</a></li>
                                                        <li><a href="addphoto.php"> <span class='bi bi-music-note' style='color: white'></span> Add</a></li>
                                                    </ul>
                                                </li>
                                                <li><a>Video</a>
                                                    <ul class="dropdown">
                                                        <li><a href="updatevideo.php">Update</a></li>
                                                        <li><a href="addvideo.php">Add</a></li>
                                                    </ul>
                                                </li>
                                                <li><a ><span class='bi bi-music-note' style='color:white'></span>News</a>
                                                    <ul class="dropdown">
                                                        <li><a href="updatenews.php">Update</a></li>
                                                        <li><a href="addnews.php"><span class='bi bi-music-note' style='color:white'></span>Add</a></li>
                                                    </ul>
                                                </li>
                                                    <li><a >Events</a>
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
                                            <li><a href="#">Manual</a>
                                        <ul class="dropdown">
                                        <li><a href="update.php" target="_blank">Update/Delete</a></li>
                                            <li><a href="add.html" target="_blank">Add</a></li>
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
            <h2>Add News</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

<?php
    	    $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
          or die ("can't connect");

session_start();

if(!isset($_SESSION ['admin'])){
    echo '<br< <br> <br> <br> <br><div class="row">
    <div class="col-12">
        <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
        <h1>Your session has expired, please login</h1>
            <a href="login.html" class="btn oneMusic-btn">Login <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
</div> <br< <br> <br> <br> <br>';

}

elseif(isset($_SESSION ['admin']))

{

//Add action sql
if(isset($_POST['add']))
{

$page_link = 'login.html';

    $sql2 ="INSERT INTO news(p1,p2,iframe) VALUES ('$_POST[p1]','$_POST[p2]','$_POST[iframe]')";

    mysqli_query ($connection, $sql2);
    $news= $_POST['p1'];

    echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;
    echo '<br>' ;

    echo '    <div class="row">
    <div class="col-12">
<div class="text-center wow fadeInUp" data-wow-delay="300ms">
<div class="album-thumb"> 
    <h2>You have added a new News " </i> ' . $news . '" Successfully</h2> 
    </div> 
    </div>
    </div>
    </div>
    <br>';
 

}


//Variable name for the table

    $result = mysqli_query ($connection, "Select * FROM news");




//Table2
echo '     <div class="container-fluid pt-3">
<div class="row">
<div class="col-12">
<br>
<br>
<br>
    <hr>  
<table class="table table-hover">
<thead>
 <tr>

 <th>*First Paragraph</th>
 <th>Second Paragraph</th>
 <th>iframe</th>
 

 </tr>
 </thead>';


 echo "<form action = 'addnews.php' method='POST' enctype='multipart/form-data'>";

echo "<tbody>";
echo "<tr>";

echo "<td> <input type = 'text' name  = 'p1' id= 'p1' required /></td>";
echo "<td> <input type = 'text' name  = 'p2' id= 'p2'/></td>";
echo "<td> <input type = 'link' name  = 'iframe' id= 'iframe'  /></td>";
echo "<td> <input type = 'submit' name= 'add' id= 'add' value= 'Add News' /></td>";
echo "<tr>";
echo "</tbody>";
echo "</form>"; 
echo "</table>"; 
echo "</div>"; 
echo "</div>"; 
echo "</div>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
mysqli_close($connection);

}
        ?> 
<style>
     	/*
	Label the data small screen table
	*/
    @media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {
	td:nth-of-type(1):before { content: "*First Paragraph"; }
	td:nth-of-type(2):before { content: "Second Paragraph"; }
    td:nth-of-type(3):before { content: "iframe"; }

}
</style>

<!-- Footer -->
<?php include 'footer.html';?>



</body>

</html>