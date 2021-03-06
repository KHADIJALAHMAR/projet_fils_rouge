<?php
class ControllerCompte extends Controller
{
  public function __construct()
  {
    $this->model = $this->model('ModelCompte');
    $this->Adminmodel= $this->model('ModelAdmin');
    $this->modelpharma= $this->model('ModelPharma');
    $this->Session = new Session;
  }

  public function index()
  {
    // satrting session
    $this->Session->startSession();
    // getting id session
    $id_user = $this->Session->getSession('id_user');
    // getting data
    $result = $this->modelpharma->get_pharma($id_user);
    var_dump($result);
    // sending data
    $this->view('pages/pharmacist/profile',$result);
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
      } 
        // Check email
        if ($this->model->findUser($data['email'])) {
          $data['email_err'] = 'Email already taken';
        
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
        
    }  $this->view('pages/signup');
  }


  public function select()
    {

        $this->Session->startSession();
              // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Sanitize POST data
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $this->Session->startSession();
          // Init data
          $data = [
              'email'        => trim($_POST['email']),
              'pass_word'     => trim($_POST['password']),
              'fname'     => trim($_POST['fname']),
              'email_err'    => '',
              'pass_word_err' => '',
              'fname_err'    => '',
          ];
          // Validate Email
          if (empty($data['email'])) {
              $data['email_err'] = 'Please enter email';
          } 
          // Validate Password
          if (empty($data['pass_word'])) {
              $data['pass_word_err'] = 'Please enter password';
          }
           // Validate fname
          if (empty($data['fname'])) {
            $data['fname_err'] = 'Please enter Fname';
        } 
          // Make sure errors are empty
          if (empty($data['email_err']) && empty($data['password_err']) && empty($data['fname_err'])) {
              // Check and set logged in user
              $user = $this->model->login($data['email'], $data['pass_word'],$data['fname']);
              if ($user) {
                  // Create Session
                  $this->Session->setSession('id_user',$user->id_user);
                  $this->Session->setSession('email',$user->email);
                  $this->Session->setSession('fname',$user->fname);
                  $this->Session->setSession('role',$user->role);
                  if ($this->Session->getSession('role') == 'pharmacist') {
                    header('location:' . URLROOT . '/Controllerpharma/index');
                  }elseif ($this->Session->getSession('role') == 'Admin') {
                    header('location:' . URLROOT . '/ControllerPharma/index');
                  }
                  

              } else {
                  $data['pass_word_err'] = 'Password incorrect';
                  $this->view('pages/login', $data);
              }
              
          } else {
              // Load view with errors
              $this->view('pages/login', $data);
          }
      } else {
          // Init data
          $data = [
              'email'        => '',
              'password'     => '',
              'email_err'    => '',
              'pass_word_err' => '',
          ];
          // Load view
          $this->view('pages/login', $data);
      }

    
  }
  
public function updatePhoto() {
  if (isset($_POST['submit'])) {
      if (!empty($_FILES['image']) && !empty($_POST['name-pharma']) && !empty($_POST['localisation']) && !empty($_POST['phone'])) {

       
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
                  $this->Adminmodel->updatePhoto($data);

                  header('location:' . URLROOT . '/ControllerCompte/index');
              }
              else{
                echo"hello";
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
  
  public function edit($id_pharmacy) {
 
    $result =$this->Adminmodel->getPharmabyId($id_pharmacy);
    if($result) {
        $this->view('pages/pharmacist/update', $result);
    }else {
        return false;
    }





}




public function delete($id_pharmacy)
{
  $this->Adminmodel->deletPharma($id_pharmacy); 
 header('location:' . URLROOT . '/ControllerCompte/index');
 // echo $_GET['id'];
}


public function logout(){
  unset($_SESSION['id_user']);
  unset($_SESSION['email']);
  unset($_SESSION['fname']);
  unset($_SESSION['role']);
  header('location:' . URLROOT . '/ControllerCompte/select');
}

}
