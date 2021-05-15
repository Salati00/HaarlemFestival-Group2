<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
        $this->restaurantModel =$this->model('Restaurant');
        $this->ticketsModel=$this->model('RestaurantTickets');

    }

    public function index() {
        $restaurant = $this->restaurantModel->getAllRestaurant();
        $restaurant_type = $this->restaurantModel->getAllType();
        $data = array($restaurant,$restaurant_type);
        $this->view('food_home', $data);

    }
    public function food_tickets($restaurant_Id){
        $ticket =$this->ticketsModel->getRestaurantTickets($restaurant_Id);
        $data = array($ticket);
        $this->view('food_tickets',$data);

    }
    public function orders(){
        $allergies   = $_POST['allergies'];
        $quantity = $_POST['quantity'];
        var_dump($allergies);
        var_dump($quantity);
        $this->view('orders');
    }
    
}
