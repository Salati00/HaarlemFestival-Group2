<?php
    class Historic{
        private $db;
        public function __construct()
        {
            $this -> db  = new Database();
        }
        public function getTours($language){
            $this ->db ->query("SELECT t.time, t.duration, t.price,l.language FROM tour_language JOIN tours as t ON tour_language.Tour_id = t.Tour_ID JOIN language AS l ON tour_language.Language_ID = l.Language_ID WHERE l.language ='$language'");
            $history = $this->db->resultSet();
            return $history;
        }

    }
