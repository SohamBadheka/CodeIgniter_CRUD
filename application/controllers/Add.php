<?php

class Add extends CI_Controller{
  

  function index()
  {

  	$this->load->model('first_model');
    $data['rows']=$this->first_model->getAll();
  	$this->load->view('home',$data);
  }

  function one()
  {
    $this->load->view('form');
  }
}
  
?>