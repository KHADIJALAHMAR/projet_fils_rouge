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
    $this->db->query("INSERT INTO `pharmacy` ( `localisation`, `image`, `phone`) VALUES ( :localisation,:image,:phone)");
    $this->db->bind(':localisation', $data['localisation']);
    $this->db->bind(':image', $data['image']);
    $this->db->bind(':phone', $data['phone']);
    $exucute_data=$this->db->execute();
    return $exucute_data;
    if($exucute_data)
    {
        echo "insert  exist";
    }else{
        echo"insert does not exist";
    }



}
}