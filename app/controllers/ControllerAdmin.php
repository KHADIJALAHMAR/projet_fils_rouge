<?php
class ControllerAdmin extends Controller
{
  public function __construct()
  {
    $this->model = $this->model('ModelAdmin');
    $this->Session = new Session;
  }
}