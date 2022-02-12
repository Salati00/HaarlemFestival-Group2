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
   public function orders()
   {
       $target_dir = "/upload";

       $uploadOk = 1;


// Check if image file is a actual image or fake image
       if (isset($_POST["submit"])) {
           $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
           $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
           print_r($imageFileType);
           if ($target_file == "upload/") {
               $msg = "cannot be empty";
               $uploadOk = 0;
           } // Check if file already exists
           else if (file_exists($target_file)) {
               $msg = "Sorry, file already exists.";
               $uploadOk = 0;
           } // Check file size
           else if ($_FILES["fileToUpload"]["size"] > 5000000) {
               $msg = "Sorry, your file is too large.";
               $uploadOk = 0;
           } // Check if $uploadOk is set to 0 by an error
           else if ($uploadOk == 0) {
               $msg = "Sorry, your file was not uploaded.";

               // if everything is ok, try to upload file
           } else {
               if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                   $msg = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
               }
           }
       }
       $this->view('orders');
   }
    public function pdf_qrCode(){
        if(isset($_POST['Generate'])) {

        $name=$_POST['email'];
        $address=$_POST['Address'];
        $city=$_POST['city'];
        $zip=$_POST['zip'];

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);

        $pdf->Cell(50,10,"Firstname: ",1,0);
        $pdf->Cell(140,10,$name,1,1);

        $pdf->Cell(50,10,"Address: ",1,0);
        $pdf->Cell(140,10,$address,1,1);

        $pdf->Cell(50,10,"City: ",1,0);
        $pdf->Cell(140,10,$city,1,1);

        $pdf->Cell(50,10,"Zip Code: ",1,0);
        $pdf->Cell(140,10,$zip,1,1);

        $pdf->Output();
         }
            $this->view('pdf_qrCode');
        }
    
}
