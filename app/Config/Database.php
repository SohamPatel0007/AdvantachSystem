<?php
class Database {
    private $host = "localhost";
    private $db = "wecon_db";
    private $user = "root";
    private $pass = "";

    public function connect(){
        try{
            return new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
        }catch(PDOException $e){
            die("Database Error: " . $e->getMessage());
        }
    }
}
