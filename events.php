<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project -->

<!--This is a dynamic content page containing a search option and all gigs from the database-->

<!--Card Script to add values of selected item-->
<?php
include('cartcode.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jazz music gigs, Christine Adams Edinburgh and Cambridge Singer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Jazz music Gigs</title>

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
                                    <li><a href="index.php#events"> <span class='bi bi-music-note' style='color: white'></span>Gigs</a></li>
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
        
        <!-- ##### Breadcumb Area Start ##### -->
        <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/gallery.jpg)">
            <div class="bradcumbContent">
                <h2>Gigs</h2>
            </div>
        </section>

        
        <!--search-->
        <script src="jquery-1.7.1.min.js"></script>
<script>
function selectChange(val) {
    //Set the value of action in action attribute of form element.
    //Submit the form
    $('#myForm').submit();
}
</script>
<br>
<br>
<br>

<div class="container">
<div class="row">
        <div class="col-md-4 col-md-offset-6">
        </div>


        <div class="col-md-6 col-md-offset-6">

        <form id="myForm" action="events.php#bandName" method="post" name="option_form" class="awesome-form">

        <select onChange=selectChange(this.value) name ='bandName' id='bandName'>
        <option selected="true" disabled="disabled" value="">Bands</option>

                <?php
                $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");

$sql ="SELECT distinct band FROM gigs";
$result = mysqli_query ($connection,$sql);
while ($row = mysqli_fetch_array ($result)) {
    echo "<option value='" .$row ['band'] . "'>" .$row['band'] . "</option>";
   
}
echo '<input  type="submit" value="Search By Band"> ';
                ?>

			</select>

			<!-- <label>Order by band</label> -->
            
            <br><br><input  class="btn oneMusic-btn" type="submit" value="All events"> 
        </div>
	</form>
</div>
</div>
</div>
   <!--search ends-->

  <!-- ##### Events Area Start ##### -->
  <section id="events" class="oneMusic-buy-now-area has-fluid section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                    </div>
                </div>
            </div>

 <!-- Events Area -->
 
 <div class="row">


 <?php 
//  ini_set('display_errors', 1);
//  ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);
//  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");
$bandName = $_POST['bandName'];


	if (isset($bandName)){
	$sql = "SELECT * FROM gigs WHERE band = '$bandName'";
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
						<a href='. $row['link'] .' target="_blank"> @ <br>' . $row['venue'] . '</a>
			  <br> <b>' . $row['time'] .'</b></p>';
			   //Social media buttons 
echo                  '<div class="sharethis-inline-share-buttons">
			   </div>
			   </div>
			</div>
		</div>';
	}
	// echo '<h2><a href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR1/JazzMusic/events.php#bandName"><i>Back To All Events</i></a></h2>';
}

	else {
		$sql = "SELECT * FROM gigs";
		$result = mysqli_query($connection,  $sql)
		or die ("couldn't run query");
		
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo      '<div class="col-4 col-sm-6 col-md-4 col-lg-2">
		<div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
			<div class="album-thumb"> ';                   
		 echo           '<h1>'. $row['day'] . '</h1>';
		  echo             ' <h5>' . $row['date'] . '</h5>';
		  echo             ' <p>' . $row['band'] . '
							<a href='. $row['link'] . '> @ <br>' . $row['venue'] . '</a>
				  <br> <b>' . $row['time'] .'</b></p>';
                 //Social media buttons 
                  echo '    <div class="placement">
                  <div class="heart"></div>
                </div>';
				   //Social media buttons 
	echo                  '<div class="sharethis-inline-share-buttons">
				   </div>
				   </div>
				</div>
			</div>
           ';
	}
}

                        ?>

                    </div>
           
        </div>
    </section>
       

<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<style>
.heart {
  width: 100px;
  height: 100px;
  background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;
  background-position: 0 0;
  cursor: pointer;
  transition: background-position 1s steps(28);
  transition-duration: 0s;
}
.heart.is-active {
  transition-duration: 1s;
  background-position: -2800px 0;
}


</style>

    <script>
        $(function() {
  $(".heart").on("click", function() {
    $(this).toggleClass("is-active");
  });
});
    </script>
    <!-- ##### Gigs Area End ##### -->



    <!-- ##### Footer Area Start ##### -->
<!-- Footer -->
<?php include 'footer.html';?>


<script>
    $(function(){
	$('.awesome-form .input-group input').focusout(function(){
		var text_val = $(this).val();
		if(text_val === ""){
			$(this).removeClass('has-value');
		} else {
			$(this).addClass('has-value');
		}
	});

	$('.awesome-form .input-group select').focusout(function(){
		var text_val = $(this).children('option:selected').val();
		if(text_val === ""){
			$(this).removeClass('has-value');
		} else {
			$(this).addClass('has-value');
		}
	});
});
    </script>

</body>

</html>