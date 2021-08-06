<?php
class ModelPharma
{
    private $db;

    public function __construct(){
        $this->db = new Database;
}
public function show(){
    $this->db->query("SELECT * FROM `pharmacy` " );
    $results = $this->db->single();
    return $results;
}



public function selectFK($id_user)
{
    $this->db->query("SELECT * FROM pharmacy P, users U WHERE  P.id_user= U.id_user AND  P.id_user = :id " );
    $this->db->bind(':id',$id_user);
    $results = $this->db->resultSet();
    $number_row = $this->db->rowCount();
    if($number_row > 0){
        return  $results;
    }
    else{
        return false;
    }
}

}