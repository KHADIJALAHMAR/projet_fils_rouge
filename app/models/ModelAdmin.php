<?php
class ModelAdmin
{
    private $db;

    public function __construct(){
        $this->db = new Database;
}  
public function select(){
    $this->db->query("SELECT * FROM `pharmacy` WHERE role=:pharmacist" );
    return $this->db->resultSet();
}


}