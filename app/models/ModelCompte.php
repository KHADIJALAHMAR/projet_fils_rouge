<?php
class ModelCompte
{
    private $db;

    public function __construct(){
        $this->db = new Database;
}  
public function add_compte($data)

{
    $this->db->query("INSERT INTO `users`( `fname`, `lname`, `email`, `pass_word`, `role`) VALUES (:fname,:lname,:email,:pass_word,:role)");
     $this->db->bind(':fname', $data['fname']);
     $this->db->bind(':lname', $data['lname']);
     $this->db->bind(':email', $data['email']);
     $this->db->bind(':pass_word', $data['pass_word']);
     $this->db->bind(':role', $data['role']);
     $exucute_data=$this->db->execute();
     return $exucute_data;

     if($exucute_data){
        echo "insert exucute";
    }else{
        echo"not exucute";
    }
}

}  