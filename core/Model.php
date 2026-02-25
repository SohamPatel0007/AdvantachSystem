<?php
class Model {
    protected $db;
    public function __construct(){
        require_once "../app/Config/Database.php";
        $database = new Database();
        $this->db = $database->connect();
    }
}
