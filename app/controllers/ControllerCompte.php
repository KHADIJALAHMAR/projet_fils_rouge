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
        // validation
        if (empty($data['email'])) {
          echo "please enter your email";
      }else{
        // check if email already exists
        if($this->model->findUser('email')){
          echo "email already taken";
        }
      }
if ($this->model->signup($data)) {

 $this->view('pages/login');
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
       //validation email
       if (empty($data['email'])) {
        echo "please enter your email";
    }
     //validation password
     if (empty($data['password'])) {
      echo "please enter your password";
  }
  elseif (strlen($data['password']) < 5) {
      echo "password must be at least 5 characters";
  }

  if ($this->model->signup($data)) {

      redirect('ControllerCompte/login');
  }
  else {
      $this->view('pages/Signup');
  }

}
else {
  $this->view('pages/Signup');
}

  $result = $this->model->login($email,$password);
  if($result){
   $this->view('pages/index');
  }
  }else{
    $this->view('pages/login');
  }

  }