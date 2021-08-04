<?php
  class ControllerCompte extends Controller {
    public function __construct(){
        $this->model= $this->model('ModelCompte');
        $this->Session = new Session;

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
      }
       //validation password
       if (empty($data['pass_word'])) {
        echo "please enter your pass_word";
    }
    elseif (strlen($data['pass_word']) < 5) {
        echo "password must be at least 5 characters";
    }
    if ($this->model->signup($data)) {

      $this->view('pages/login');
     }
        // check if email already exists
        if($this->model->findUser('email')){
          echo "email already taken";
        }
        else{
          $this->view('pages/signup');
        }

      }
}
  public function select()
    {

        $this->Session->startSession();

        // if (isset($_SESSION['email'])) {

        //     header('location:' . URLROOT . '/ProfilController/pageProfil');
        // }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => $_POST['email'],
                'pass_word' => $_POST['password']
            ];
            //validation email
            if (empty($data['email'])) {
                echo "please enter your email";
            }
            //validation password
            if (empty($data['pass_word'])) {
                echo "please enter your password";
            }
            //check for email et password
            if ($user =$this->model->login($data['email'],$data['pass_word'])) {

                $this->Session->setSession('id_user',$user->userId);
                $this->Session->setSession('username',$user->username);

                ////////
                header('location:' . URLROOT . '/ControllerCompte/index');
                ///////

            }
            else {
                echo "please enter a valid email";
            }

        }
        else {
            $this->view('pages/Login');
        }
    }
  }