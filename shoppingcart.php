<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702-->

<!--Cart script script that counts the number of items in the cart and add the cart icon to the navbar if there is an item in it -->

 <?php

session_start();
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="img/core-img/cart.png" width="30px"/><span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>