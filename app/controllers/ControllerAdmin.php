<?php
class ControllerAdmin extends Controller
{
  public function __construct()
  {
    $this->adminModel = $this->model('ModelAdmin');
    $this->Session = new Session;
  }
  public function index()
  {
    
    $pharmacy = $this->adminModel->select_pharmacy();
    $pharmacists = $this->adminModel->selectPharmacists(); 


    $data = [
      'pharmacy' => $pharmacy,
      'pharmacists' => $pharmacists,
    ];


    $this->view('pages/Admin/dashbord',$data);
  }

  public function show_user(){
     
      $role_users = $this->adminModel->selectPharmacists();

      $data = [
        'role_users' => $role_users
      ];
      $this->view('pages/Admin/dashbord',$data);
  }
  



  public function delete($id_pharmacy)
  {
    $this->adminModel->deletPharma($id_pharmacy); 
   header('location:' . URLROOT . '/ControllerAdmin/index');
   // echo $_GET['id'];
  }






  public function delete_pharmacist($id_pharmacist)
  {
    $this->adminModel->deletPharmacist($id_pharmacist); 
   header('location:' . URLROOT . '/ControllerAdmin/index');
   // echo $_GET['id'];
  }




  public function edit($id_pharmacy) {
 
    $result =$this->adminModel->getPharmabyId($id_pharmacy);
    if($result) {
        $this->view('pages/Admin/update', $result);
    }else {
        return false;
    }









}   

public function updatePhoto() {
  if (isset($_POST['submit'])) {
      if (!empty($_FILES['image']) && !empty($_POST['name-pharma']) && !empty($_POST['localisation']) && !empty($_POST['phone'])) {

        echo"heloo";
          $new_image = $_FILES['image']['tmp_name'];
          $data = [
              'id_pharmacy' => $_POST['id'],
              'name_pharma' => $_POST['name-pharma'],
              'old_image' => $_POST['old_image'],
              'phone'    =>$_POST['phone'],
              'image' => $_FILES['image']['name'],
              'localisation' => $_POST['localisation'],
          ];
          $old_image = $data['old_image'];
          $path="C:\\xampp\htdocs\\projet_fils_rouge\public\assets\img/$old_image";
          chown($path, 666);
         
          
              if ($this->uploadPhoto($new_image) === true) {
                  $this->adminModel->updatePhoto($data);

                  header('location:' . URLROOT . '/ControllerAdmin/index');
              }
          
      }
  }
}

public function uploadPhoto($image)
{    
  $dir = "C:\\xampp\htdocs\\projet_fils_rouge\public\assets\img";    
 //  $time = time();   
   $name = str_replace(' ','-',strtolower($_FILES["image"]["name"]));    
   $type = $_FILES["image"]["type"];       
   if(move_uploaded_file($_FILES["image"]["tmp_name"],$dir."/".$name))
   {       
      return true;    }
   else{      
     return false;   
    }   
  }



}