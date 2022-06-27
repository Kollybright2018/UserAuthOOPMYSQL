<?php
class Dbh{
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $db = "zuriphp";

    protected function connect(){
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        if($conn){
            echo "Database Connected";
            return $conn;
        }else{
            die("error in connection");
        }
    }
}






?>