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
public function add($data){
    $this->db->query("INSERT INTO `pharmacy` ( `name_pharma`,`localisation`, `image`, `phone`) VALUES ( :name_pharma,:localisation,:image,:phone)");
    $this->db->bind(':name_pharma', $data['name_pharma']);
    $this->db->bind(':localisation', $data['localisation']);
    $this->db->bind(':image', $data['image']);
    $this->db->bind(':phone', $data['phone']);
      $exucute_data=$this->db->execute();
    return $exucute_data;
    if($exucute_data){
        echo "insert  exist";
    }else{
        echo"insert does not exist";
    }
}
public function selectFK($id_user){
    $this->db->query("SELECT * FROM pharmacy P, users U WHERE  P.id_user= U.id_user AND  P.id_user = :id " );
    $this->db->bind(':id',$id_user);
    $results = $this->db->resultSet();
    $number_row = $this->db->rowCount();
    if($number_row >0){
        return $row;
    }
    else{
        return false;
    }
    return $results;
}

}