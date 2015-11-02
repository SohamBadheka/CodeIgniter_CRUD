<?php

class Category_controller extends CI_Controller{
  

  function add()
  {

  		$this->load->helper(array('form', 'url'));
  		$this->load->view('cat_add');
  		
}
  function add_cat()
	{
		$this->load->model('cat_model');
		$data=array(
  			'name'=> $this->input->post('name'),
  			'logo'=> $this->input->post('logo')
  			);
  		$this->cat_model->add_data($data);
  		$this->show();
	}

  function show(){

  	$this->load->model('cat_model');
	$data=array();
  	$this->load->helper(array('form', 'url'));
   // $this->load->view('form');
	
 	if($q=$this->cat_model->get_data())
 	{
 		$data['records']=$q;
 	}

 	$this->load->view('cat_show',$data);
  }

  function delete(){
  		$this->load->model('cat_model');
  		$this->cat_model->del_data();
  		$this->show();
}

 function update(){
  			
		$this->load->helper(array('form', 'url'));
  		$this->load->view('cat_update');
  		
  		}

  		
  function update_cat(){
    $this->load->helper(array('form', 'url'));
  	$this->load->model('cat_model');
  			$data=array(
  			'name'=> $this->input->post('name'),
  			'logo'=> $this->input->post('logo')
  			);
		$this->cat_model->update_data($data);

  		$this->show();

  		}

}
  
?>