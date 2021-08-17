<?php
class ModelCompte
{
    private $db;

    public function __construct(){
        $this->db = new Database;
}  
public function login($email,$password,$fname){
    $this->db->query("SELECT * FROM `users`  WHERE email=:email AND pass_word=:pass_word AND fname=:fname" );
    $this->db->bind(':email', $email);
    $this->db->bind(':pass_word', $password);
    $this->db->bind(':fname', $fname);

    $results = $this->db->single();

    return $results;
}




public function signup($data)

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
        echo "insert  exist";
    }else{
        echo"insert does not exist";
    }
}
public function findUser($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        }
        else {
            return false;
        }
    }
  
    

}  