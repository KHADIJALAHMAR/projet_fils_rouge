<?php
class ControllerPharma extends Controller{
    public function __construct(){
        $this->model= $this->model('ModelPharma');
    }
    public function index(){
        $result = $this->model->show();
        $this->view('pages/pagePharma',$result);
    }





    public function insert()
    {
    if (isset($_POST["submit"])) {
     $image=$_FILES['image']['tmp_name'];
      $data=[
     'name_pharma' =>$_POST['name_pharma'],
     'localisation' => $_POST['localisation'],
     'phone'=>$_POST['phone'],
     'image' => $_FILES['image']['name'],
     
      ];
      if($this->uploadPhoto($image)===true){
       if( $this->model->add($data) ){
         
         header('location:'.URLROOT .'/ControllerPharma/index');
         
      } else{
         die('Something went wrong');
      }
   }else{
      die('Something went wrong');
   }
     
    }
    
      $this->view('pages/insert');
    }




    public function uploadPhoto($image)
{    
  $dir = "C:\\xampp\htdocs\\projet_fils_rouge\public\img";    
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


  public function pharma(){
    $this->session->startSession();
    $data_pharma= $this->model->selectFK($_SESSION['id_user']);
    $data=[
      'pharmacie' => $data_pharma
    ];
    $this->view('pages/pagePharma',$data);
  }
}