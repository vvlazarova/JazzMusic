<!-- Collage Project
     Cristine Adam's Website 05/2022 
Developed by Violeta Lazarova - ec1929702 -->
<!-- Collage Project
This is the shoping cart page-->

<!--Card Script to add values of selected item-->
<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jazz music Bands, Christine Adams Edinburgh and Cambridge Singer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Jazz music Bands</title>

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
                                    <li><a href="index.php#events"> </span>Gigs</a></li>
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
    <!-- Shopping Cart-->
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
                <h2>Shopping Cart</h2>
            </div>
        </section>
        <!-- powr BEGIN --><div class="powr-popup" id="sharethis-popup-623472b1c28d5a001c67ad78"></div><!-- powr END -->

        <br>
        <br>
        <br>
        <br>

        <div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td>

</td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>

<td><?php echo "£".$product["price"]; ?></td>
<td><?php echo "£".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" style="text-align: right; font-size:20px;">
<strong>TOTAL: <?php echo "£".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>



<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=GBP" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'black',
          layout: 'horizontal',
          label: 'checkout',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"GBP","value": '<?php echo $total_price;?>'}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';
            element.innerHTML = '<a href="audio/<?php echo $product['mp3'];?>" download style="font-size:30px "><i>Download File</i></a> <br> <br>';


            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>


</div>

<div style="clear:both;"></div>

<div class="message_box" style="text-align: center; font-size: large;">
<?php echo $status; ?>
</div>

<br>
<br>
<br>



    <!-- ##### Footer Area Start ##### -->
<!-- Footer -->
<?php include 'footer.html';?>



</body>

</html>