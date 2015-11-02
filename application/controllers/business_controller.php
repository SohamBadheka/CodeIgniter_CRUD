<?php

class business_controller extends CI_Controller{
  

  function add()
  {

  		$this->load->helper(array('form', 'url'));
  		$this->load->view('business_add');
  		
}
  function add_business()
	{
		$this->load->model('business_model');
		$data=array(
  			'name'=> $this->input->post('name'),
  			'logo'=> $this->input->post('logo')
  			);
  		$this->business_model->add_data($data);
  		$this->show();
	}

  function show(){

  	$this->load->model('business_model');
	$data=array();
  	$this->load->helper(array('form', 'url'));
   // $this->load->view('form');
	
 	if($q=$this->business_model->get_data())
 	{
 		$data['records']=$q;
 	}

 	$this->load->view('business_show',$data);
  }

  function delete(){
  		$this->load->model('business_model');
  		$this->business_model->del_data();
  		$this->show();
}

 function update(){
  			
		$this->load->helper(array('form', 'url'));
  		$this->load->view('business_update');
  		
  		}

  		
  function update_business(){
  	$this->load->model('business_model');
  			$data=array(
  			'name'=> $this->input->post('name'),
  			'logo'=> $this->input->post('logo')
  			);
		$this->business_model->update_data($data);

  		$this->show();

  		}

}
  
?>