<?php
include ('../model/jazz_model.php');
    class jazz_controller {

        public function getAllJazzTickets(){
            $model = new jazz_model();
            $row= $model->getAllTickets();
            return $row;
        }
        public function getTopArtists(){
            $model = new jazz_model();
            $row = $model->getTopArtists();
            return $row;
        }























        

        // public function createShoppingCart($ticket){
        //     $model = new jazz_model();
        //     $row = $model->createShoppingCart($ticket);
        //     return $row;
        // }
        // public function displayShoppingCart(){
        //     $model = new jazz_model();
        //     $row = $model->displayShoppingCart();
        //     return $row;
        // }
        // public function removeFromCart(){
        //     $model = new jazz_model();
        //     $row = $model->removeFromCart();
        //     return $row;
        // }
        // public function getTicket($id){
        //     $model = new jazz_model();
        //     $row = $model->getArtistsbyID($id);

        //     $ID = $id;
        //     foreach((array) $row as $r){
        //         $price = $r['price'];
        //         $name = $r['artistname'];
        //     }
        //     $ticket = array("ticketID" => $ID, "item_name" =>$name, "item_price" => $price, "item_quantity" =>$_POST['quantity']);
        //     return $ticket;
        // }
    }


        
