<?php

class Subcat_controller extends CI_Controller{
  
  function add()
  {

  		$this->load->helper(array('form', 'url'));
  		$this->load->view('subcat_add');
  		
}
  function add_subcat()
	{
  $this->load->model('subcat_model');
		$data=array(
        'cat_id'=>$this->input->post('catid'),
  			'name'=> $this->input->post('name'),
  			'logo'=> $this->input->post('logo')
  			);
  		$this->subcat_model->add_data($data);
  		$this->show();
	}

  function show(){

	$data=array();
  	$this->load->helper(array('form', 'url'));
   // $this->load->view('form');
	
 	if($q=$this->subcat_model->get_data())
 	{
 		$data['records']=$q;
 	}

 	$this->load->view('subcat_show',$data);
  }

  function delete(){
  		$this->subcat_model->del_data();
  		$this->show();
}

 function update(){
  			
		$this->load->helper(array('form', 'url'));
  		$this->load->view('subcat_update');
  		
  		}

  		
  function update_subcat(){
  			$data=array(
  			'name'=> $this->input->post('name'),
  			'logo'=> $this->input->post('logo')
  			);
		$this->subcat_model->update_data($data);

  		$this->show();

  		}

}
  
?>