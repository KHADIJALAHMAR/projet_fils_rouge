<?php
class ModelAdmin
{
    private $db;

    public function __construct(){
        $this->db = new Database;
}  
public function select_pharmacy(){
    $this->db->query("SELECT * FROM `pharmacy`" );
    return $this->db->resultSet();
}
public function select_user(){
    $this->db->query("SELECT * FROM `users` WHERE role =:pharmacist" );
    return $this->db->resultSet();
}


}