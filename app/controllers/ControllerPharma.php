<?php
class ControllerPharma extends Controller{
    public function __construct(){
        $this->model= $this->model('ModelPharma');
    }
    public function index(){
        $this->view('pages/pagePharma');
    }


    
}