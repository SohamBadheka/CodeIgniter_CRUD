<?php

class Index extends CI_Controller{
  

  function index()
  {

    $this->load->view('index');

  }

  function one()
  {
    $this->load->view('form');
  }
}
  
?>