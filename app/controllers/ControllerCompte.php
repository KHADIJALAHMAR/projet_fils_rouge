<?php
  class ControllerCompte extends Controller {
    public function __construct(){
        $this->model= $this->model('ModeleCompte');

    }


    public function index(){
    
        $this->view('pages/signup');
    }
    public function insert()
    {
    if (isset($_POST["submit"])) {
        $data=[
            'name' =>$_POST['fname'],
            'lname' => $_POST['lname'],
            'email' => $_POST['email'],
            'password'=>$_POST['pass_word'],
            'role'=>$_POST['role'],
        ];
        header('location:'.URLROOT .'/ControllerComptet/index');
    }
}

}