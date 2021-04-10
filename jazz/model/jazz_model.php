<?php include '../../database/db_conn.php';
//    session_start();

    class jazz_model extends db{

        public function getAllTickets(){
            $sql = "SELECT * FROM tickets ORDER BY ID";
            $result = $this->connect()->query($sql);
            // $result = $this->select($sql);\
            $num_rows=$result->num_rows;
            if($num_rows>0){
                while($row=$result->fetch_assoc()){
                    $rows[]=$row;
                }
                return $rows;
            }            
        }
        public function getTopArtists(){
            $sql = "SELECT topArtists.image, tickets.artistname, tickets.about 
            from topArtists 
            JOIN tickets on topArtists.ID=tickets.ID";

            $result = $this->connect()->query($sql);

            $num_rows=$result->num_rows;
            if($num_rows>0){
                while($row=$result->fetch_assoc()){
                    $rows[]=$row;
                }
                return $rows;
            }    
        }
        public function getArtistsbyID($id){
            $sql = "SELECT * FROM tickets WHERE ID = $id";
            $result = $this->connect()->query($sql);

            $num_rows=$result->num_rows;
            if($num_rows>0){
                while($row=$result->fetch_assoc()){
                    $rows[]=$row;
                }
                return $rows;
            }    
        }        
    }
    
