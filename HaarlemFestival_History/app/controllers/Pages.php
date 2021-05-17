<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
        $this->History_Model =$this->model('Historic');
    }

    public function index() {
        $history = $this ->History_Model->getTours('English');
        $data = array($history);
        $this->view('HistoryHome',$data);
    }
}
