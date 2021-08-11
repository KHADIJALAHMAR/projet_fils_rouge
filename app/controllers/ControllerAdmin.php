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
  
  public function delete()
  {
    $params=[
      'id'=>$_GET['id']
    ];
   $this->adminModel->deletPharma($params); 
   $this->view('pages/Admin/dashbord',$params);
   // echo $_GET['id'];
  }

}