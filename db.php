<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702

Connection to the database script for the shopping cart-->

<?php 
    $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
    
	}
                           ?>