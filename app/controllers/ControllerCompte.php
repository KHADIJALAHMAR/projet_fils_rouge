<?php
class ControllerCompte extends Controller
{
  public function __construct()
  {
    $this->model = $this->model('ModelCompte');
    $this->Session = new Session;
  }

  public function index()
  {
    $this->view('pages/signup');
  }
  public function insert()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // Init data
      $data = [
        'fname'                => trim($_POST['name']),
        'lname'                => trim($_POST['lname']),
        'email'                => trim($_POST['email']),
        'pass_word'            => trim($_POST['password']),
        'role'                 => trim($_POST['role']),
        'name_err'             => '',
        'lname_err'             => '',
        'email_err'            => '',
        'pass_word_err'         => '',
        'role_err'             => '',
      ];
      // validation
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        // Check email
        if ($this->model->findUser($data['email'])) {
          $data['email_err'] = 'Email already taken';
        }
      }


      // Validate Name
      if (empty($data['fname'])) {
        $data['name_err'] = 'Please enter name';
      }

       // Validate lName
       if (empty($data['lname'])) {
        $data['lname_err'] = 'Please enter lname';
      }

       // Validate Name
       if (empty($data['role'])) {
        $data['name_err'] = 'Please enter role';
      }

      // Validate Password
      if (empty($data['pass_word'])) {
        $data['password_err'] = 'Please enter password';
      } elseif (strlen($data['pass_word']) < 6) {
        $data['password_err'] = "Password must be at least 6 characters";
      }

      // check input is not empty
      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err'])) {
        // Hash Password
        // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        // Register User
        if ($this->model->signup($data)) {
          // Notify before redirect
          $this->view('pages/login');
        } else {
          die('Something went wrong');
        }

        $this->view('pages/signup', $data);
        
      } else {
    
        $this->view('pages/signup', $data);
      }
       // Init data
      $data = [
          'name'                 => '',
          'email'                => '',
          'pass_word'             => '',
          'confirm_password'     => '',
          'name_err'             => '',
          'email_err'            => '',
          'pass_word_err'         => '',
          'role_err'             => '',
        ];
        // Load view
        $this->view('pages/signup', $data);
    }
  }
  // public function select()
  //   {

  //       $this->Session->startSession();

  //       // if (isset($_SESSION['email'])) {

  //       //     header('location:' . URLROOT . '/ProfilController/pageProfil');
  //       // }

  //       if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  //           $data = [
  //               'email' => $_POST['email'],
  //               'pass_word' => $_POST['password']
  //           ];
  //           //validation email
  //           if (empty($data['email'])) {
  //               echo "please enter your email";
  //           }
  //           //validation password
  //           if (empty($data['pass_word'])) {
  //               echo "please enter your password";
  //           }
  //           //check for email et password
  //           if ($user =$this->model->login($data['email'],$data['pass_word'])) {

  //               $this->Session->setSession('id_user',$user->userId);
  //               $this->Session->setSession('username',$user->username);

  //               ////////
  //               header('location:' . URLROOT . '/ControllerCompte/index');
  //               ///////

  //           }
  //           else {
  //               echo "please enter a valid email";
  //           }

  //       }
  //       else {
  //           $this->view('pages/Login');
  //       }
  //   }
}
  ################################################################"
  
  // public function register()
  // {
  //     // Check for POST
  //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //         // Sanitize POST data
  //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  //         // Init data
  //         $data = [
  //             'name'                 => trim($_POST['name']),
  //             'email'                => trim($_POST['email']),
  //             'password'             => trim($_POST['password']),
  //             'confirm_password'     => trim($_POST['confirm_password']),
  //             'name_err'             => '',
  //             'email_err'            => '',
  //             'password_err'         => '',
  //             'confirm_password_err' => '',
  //         ];
  //         // Validate Email
  //         if (empty($data['email'])) {
  //             $data['email_err'] = 'Please enter email';
  //         } else {
  //             // Check email
  //             if ($this->userModel->findUserByEmail($data['email'])) {
  //                 $data['email_err'] = 'Email already taken';
  //             }
  //         }
  //         // Validate Name
  //         if (empty($data['name'])) {
  //             $data['name_err'] = 'Please enter name';
  //         }
  //         // Validate Password
  //         if (empty($data['password'])) {
  //             $data['password_err'] = 'Please enter password';
  //         } elseif (strlen($data['password']) < 6) {
  //             $data['password_err'] = "Password must be at least 6 characters";
  //         }
  //         // Validate Confirm Password
  //         if (empty($data['confirm_password'])) {
  //             $data['confirm_password_err'] = 'Please confirm password';
  //         } else {
  //             if ($data['password'] != $data['confirm_password']) {
  //                 $data['confirm_password_err'] = 'Passwords do not match';
  //             }
  //         }
  //         // Make sure errors are empty
  //         if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
  //             // Hash Password
  //             $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
  //             // Register User
  //             if ($this->userModel->register($data)) {
  //                 // Notify before redirect
  //                 redirect('users/login');
  //             } else {
  //                 die('Something went wrong');
  //             }
  //         } else {
  //             // Load view with errors
  //             $this->view('users/register', $data);
  //         }
  //     } else {
  //         // Init data
  //         $data = [
  //             'name'                 => '',
  //             'email'                => '',
  //             'password'             => '',
  //             'confirm_password'     => '',
  //             'name_err'             => '',
  //             'email_err'            => '',
  //             'password_err'         => '',
  //             'confirm_password_err' => '',
  //         ];
  //         // Load view
  //         $this->view('users/register', $data);
  //     }
