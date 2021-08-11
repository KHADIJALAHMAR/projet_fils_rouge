<?php
class ControllerAdmin extends Controller
{
  public function __construct()
  {
    $this->model = $this->model('ModelAdmin');
    $this->Session = new Session;
  }
  public function index()
  {
    $result = $this->model->select_pharmacy();
    $this->view('pages/Admin/dashbord',$result);
  }
  

}