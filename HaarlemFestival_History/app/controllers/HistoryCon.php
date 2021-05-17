<?php


class HistoryCon extends Controller
{
    private $data;
    public function  __construct($post_data)
    {
        $this ->History_Model = $this->model('Historic');
        $this->data = $post_data;
    }
    public function chLanguage(){
        $val = trim($this-> data['language_tour']);
        $history = $this->History_Model->getTours($val);
        $hard = array($history);
        var_dump($hard);
        $this->view('HistoryHome',$hard);
        return $hard;
//        if($_SERVER['REQUEST_METHOD'] == 'POST'){
//            $_POST = filter_input(INPUT_POST);
//            $lang = ($_POST['language_tour']);
//            $history = $this->History_Model->getTours($lang);
//            $data = array($history);
//            var_dump($data);
//            $this->view('HistoryHome',$data);
//        }
    }
}