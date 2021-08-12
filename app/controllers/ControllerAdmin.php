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
  
  public function delete($id_pharmacy)
  {
    $this->adminModel->deletPharma($id_pharmacy); 
   header('location:' . URLROOT . '/ControllerAdmin/index');
   // echo $_GET['id'];
  }
  public function delete_pharmacist($id_pharmacist)
  {
    $this->adminModel->deletPharmacist($id_pharmacist); 
   header('location:' . URLROOT . '/ControllerAdmin/index');
   // echo $_GET['id'];
  }

}