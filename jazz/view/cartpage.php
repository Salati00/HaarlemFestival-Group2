<?php include('../view/header.php');
    // require_once ('../view/ticketspage.php');

    // include_once('../controller/jazzcontr.php');
    include_once('../../shoppingcart/cart/shoppingcartContr.php');
    session_start();

    $shoppingContr = new shoppingcartContr();
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../styles/jazzhome.css">
        <!-- <link rel="stylesheet" href="../styles/jazztickets.css"> -->
        <link rel="stylesheet" href="../styles/cart.css">
    </head>
    <body>
        <section class="progressbar-container">
            <ul class="progressbar">
                <li class="active">
                    <a href="../view/cartpage.php">shopping basket</a>
                </li>
                <li class="#">
                    <a href="#">delivery</a>
                </li>
                <li class="#">
                    <a href="#">payment</a>
                </li>
                <li class="#">
                    <a href="#">confirmation</a>
                </li>
            </ul>
        </section>
            <section class="content-heading">
                <h2>shopping basket</h2>
            </section>
        <form method="post">
            <?php 
                if(isset($_POST['add'])){
                    $tickets = $shoppingContr->getJazzTicket($_GET['id']);

                    $cart = $shoppingContr->createShoppingCart($tickets);
                }
                $ds = $shoppingContr->displayShoppingCart();


                if(!empty($_SESSION['shopping_cart'])){
                    echo ("<article class='order-btn'><button onclick=''>to order</button></article>");
                    echo("<section class='btn-continue-container'><a class='btn-continue2' href='../view/ticketspage.php'>Buy more tickets?</a></section>");
                }

                ?>

                <?php
                     
                if(isset($_POST['action' == 'submit'])){
                    $shoppingContr->removeFromCart();
                }
                

            ?>
        </form>
       
       </section>
                
                
    </body>
</html>






