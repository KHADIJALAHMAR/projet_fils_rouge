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
public function getFk ($id_user){
    
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


public function select($data)
{
    $this->db->query("INSERT INTO `pharmacy` ( `name_pharma`, `localisation`, `image`, `phone`, `id_user`) VALUES (:name_pharma, :localisation, :image, :phone, :id_user)");
    $this->db->bind('name_pharma',$data['name_pharma']);
    $this->db->bind(':localisation',$data['localisation']);
    $this->db->bind('image',$data['image']);
    $this->db->bind(':phone',$data['phone']);
    $this->db->bind(':id_user',$_SESSION['id_user']);
    
    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}
public function get_pharma(){
    $this->db->query("SELECT * FROM pharmacy WHERE id_user = :id_user");
    $this->db->bind('id_user',$_SESSION['id_user']);
    $results = $this->db->single();
    return $results;
}


}