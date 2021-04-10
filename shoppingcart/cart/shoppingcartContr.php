<?php

// require_once ('../service/shoppingcartService.php');
include ('../../jazz/model/jazz_model.php');
// include ('../../jazz/library/validate.php');


class shoppingcartContr {
    

    public function getJazzTicket($id){
        $model = new jazz_model();
        $row = $model->getArtistsbyID($id);

        $ID = $id;
        // $idItem = uniqid();

        foreach((array) $row as $r){
            
            $price = $r['price'];
            $name = $r['artistname'];
        }
        $ticket = array("ticketID" => $ID, "item_name" => $name, "item_price" => $price, "item_quantity" => $_POST['quantity']);
        return $ticket;
    }

    public function createShoppingCart($ticket){
        if(isset($_SESSION['shopping_cart'])){
            $count = count($_SESSION['shopping_cart']);
            $_SESSION['shopping_cart'][$count] = $ticket;
        }
        else{
            $_SESSION['shopping_cart'][0] = $ticket;
        }
    }
    public function displayShoppingCart(){
        if(!empty($_SESSION['shopping_cart'])){
            $total = 0;

            foreach($_SESSION['shopping_cart'] as $keys=> $value){
                ?>
                <section class="container">
                    <section class="content-container">
                        
                        <section class="basket-container">
                        <article class="basket-item1">
                            <!-- <input type="hidden" name="name" value="hidden"> -->
                            <span><?php echo $value['item_name']; ?></span>
                        </article>
                        <form  method="post" action ="../view/cartpage.php">
                            <article>
                                <input type="hidden" value="<?php echo $value['ticketID']; ?>">
                                <input type="hidden" name="action" value="delete">
                                <button type="submit">delete</button>
                            <!-- <a href="../view/cartpage.php?id=<?php echo $value['ticketID']; ?>"> 
                                <img class="delete-icon"src="../../jazz/icons/delete.png" alt="delete button">
                            </a> -->
                            </article>
                        </form>
                            
                        <article class="quantity-float">Qty&colon;   <?php echo $value['item_quantity']?></article>

                        <article class="item-price">&euro;<?php echo $value['item_quantity'] * $value['item_price'];?></article>
                    </section>
                    </section>
                    <?php 
                        $total = $total + ($value['item_quantity'] * $value['item_price']);
                        $_SESSION['totalprice'] = $total;
                    ?>
                    
                <?php }?>
                <section class="bottom-section">
                        <article class="total-label">total</article>
                        <article class="total-price">&euro;<?php echo $_SESSION['totalprice'];?></article> 
                </section>

        <?php }
        else{
            echo ("<section class='emptyLabel'>Shopping cart is empty</section>"); 
            echo("<section class='btn-continue-container'><a class='btn-continue' href='../../jazz/view/ticketspage.php'>Continue shopping?</a></section>");
        }
        
    }
    public function RemoveFromCart(){ //needs to be fixed
        // echo "hello";
        // die();

        if(isset($_POST['action']) && $_POST['action']=="delete"){
                foreach($_SESSION['shopping_cart'] as $keys => $value)
                    {
                        // if($_POST['idItem'] == $value["idItem"])
                        // {
                            unset($_SESSION['shopping_cart'][$value]); //$keys   
                                    
                            echo "item has been deleted";  //testing
                        // }
                    }      
            
            header('location: ../view/cartpage.php');
        }
        
    }

}
