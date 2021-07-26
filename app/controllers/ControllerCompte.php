<?php
  class ControllerCompte extends Controller {
    public function __construct(){
        $this->model= $this->model('ModelCompte');

    }

    public function index(){
        $this->view('pages/signup');
    }
    public function insert()
    {
    if (isset($_POST["submit"])) {
        $data =[
            'fname' =>$_POST['name'],
            'lname' => $_POST['lname'],
            'email' => $_POST['email'],
            'pass_word'=>$_POST['password'],
            'role'=>$_POST['role'],
        ];

        

if ($this->model->signup($data)) {

  redirect('Controllercompte/Login');
}
      else{
        $this->view('pages/signup');
      }
        
        
    }

}
public function select(){
     if(isset($_POST['submit'])){
      $email= $_POST['email'];
      $password= $_POST['password'];
    
  $result = $this->model->login($email,$password);
  if($result){
    redirect('ControllerCompte/index');
  }
  }
  $this->view('pages/signup');
  }


}