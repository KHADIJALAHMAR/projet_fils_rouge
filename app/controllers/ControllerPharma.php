<?php
class ControllerPharma extends Controller{
    public function __construct(){
        $this->model= $this->model('ModelPharma');
    }
    public function index(){
        $result = $this->model->show();
        $this->view('pages/pagePharma',$result);
    }


    
}