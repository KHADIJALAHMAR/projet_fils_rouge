<?php
class ControllerPharma extends Controller{
    public function __construct(){
        $this->modelpharma= $this->model('ModelPharma');
        $this->model= $this->model('ModelCompte');
        $this->session = new Session;
    }
    public function index(){
        $pharmacies = $this->modelpharma->show();
        $garde_pharmacy = $this->modelpharma->get_gard_pharma();
        
        $data = [
          'pharmacies' => $pharmacies,
          'garde_pharmacy' => $garde_pharmacy
        ];
        $this->view('pages/pagePharma',$data);
    }





    public function insert()
    {

      $data =[];
      // starting session
      $this->session->startSession();
      // checking if a user logged in & redirect to their home
  if (!isset($_SESSION['id_user'])) {
      header('location:' . URLROOT . '/users/login');
  }
      // print_r($_SESSION);
      $id_user = $this->session->getSession('id_user');
      //  getting data
      $result = $this->modelpharma->getFK($id_user);
    

    if (isset($_POST["submit"])) {
     $image=$_FILES['image']['tmp_name'];
      $data=[
     'name_pharma' =>$_POST['name-pharma'],
     'localisation' => $_POST['localisation'],
     'phone'=>$_POST['phone'],
     'image' => $_FILES['image']['name'],

      ];
      if($this->uploadPhoto($image)===true){
       if( $this->modelpharma->add($data) ){
         
         header('location:'.URLROOT .'/ControllerPharma/index');
      } else{
         die('Something went wrong');
      }
   }else{
      die('Something went wrong');
   }
     
    }
    
      $this->view('pages/pharmacist/insert');
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
  public function set_pharma(){

if (!isset($_SESSION['id_user'])) {
    header('location:' . URLROOT . '/users/login');
}
    header('location:'.URLROOT .'/ControllerCompte/index' );
  }
  
public function show_gard(){
  $result = $this->modelpharma->show();
  $this->view('pages/Admin/pharmaGard',$result);
}

public function update_to_gard(){
  
}

  




}