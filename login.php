
<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project
This is a dynamic content page varying the login details if it is wrong send to try again; if right send to the admin panel-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
<!--Bootstrap music note Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/table.css">

</head>

<body>



<?php
	$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");
	
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$result = "SELECT * FROM admin WHERE name = '$user' AND pass ='$pass'";
			$sql = mysqli_query ($connection , $result);
            $count = mysqli_num_rows ($sql);



if ($count == 1)
        {
         
            //sart session called user
            session_start();
            $_SESSION ['admin'] ="allowed";
            //header to redirect to the adult user page
            header("Location: admin.html");

        }

  
else {
    echo ' <div class="container">
    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
<br>
    <div class="row">
        <div class="col-12">
        <br>
        <br>
        <br>
        <br>  <br>
        <br>
        <br>
        <br>  <br>
        <br>
        <br>
        <br>
                <h2 style="color:red;"> Wrong password or username</h2>
                <br>
                <br>
                <a href="login.html" class="btn oneMusic-btn">Try again<i class="fa fa-angle-double-right"></i></a>
                </div>
                </div>
            </div>
        </div>';
} 

  
   ?> 

    
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