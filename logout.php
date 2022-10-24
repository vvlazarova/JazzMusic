<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project
Logout script to destroy the session-->
<?php
session_start();
session_destroy();
header('Location: login.html');
exit;
?>
