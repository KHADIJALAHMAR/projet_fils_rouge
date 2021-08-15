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

public function selectPharmacists(){
    $this->db->query("SELECT * FROM `users` WHERE role = 'pharmacist'" );

    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {
        return $row;
    }
    else {
        return false;
    }
}

public function deletPharma($id_pharmacy)
{
  $this->db->query("DELETE FROM`pharmacy` WHERE `id_pharmacy` = :id");
  $this->db->bind(':id',$id_pharmacy);
  $this->db->execute();
}
public function deletPharmacist($id_Pharmacist)
{
  $this->db->query("DELETE FROM`users` WHERE `id_user` = :id");
  $this->db->bind(':id',$id_Pharmacist);
  $this->db->execute();
}
public function getPharmabyId($id_pharmacy)
{
    $this->db->query("SELECT * FROM `pharmacy` WHERE id_pharmacy = :id");
    $this->db->bind(':id',$id_pharmacy);
    $results = $this->db->single();

    return $results;
}
public function updatePhoto($data) {
   
        var_dump($data);
        $this->db->query("UPDATE `pharmacy` SET `name_pharma` = :name_pharma, `localisation`= :localisation,`image`=:image , `phone`= :phone  WHERE id_pharmacy = :id_pharmacy");
        $this->db->bind(':name_pharma', $data['name_pharma']);
        $this->db->bind(':localisation', $data['localisation']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':id_pharmacy', $data['id_pharmacy']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }





    public function deletePhoto($data) {
        $this->db->query("DELETE FROM `users` WHERE id_pharmacy = :id");
        $this->db->bind(':id_pharmacy', $data['id_pharmacy']);

        if ($this->db->execute()) {
            return true;
        } else {
           return false;
        }
    }
    }
