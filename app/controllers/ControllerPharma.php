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
       if( $this->model->addPost($data) ){
         
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


}