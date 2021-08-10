<?php

class ControllerLandingPage extends Controller {
    public function __construct(){
       
    }
    public function index(){
        $this->view('pages/Admin/dashbord');
    }
}
