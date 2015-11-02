<?php

class Email extends CI_Controller{
	/*function __construct()
	{
		parent::Controller();
	}*/	

	function index()
	{

		$this->load->view('form');

	}	

	function send()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		//Set validation rules

		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			echo "fuck";
			//$this->load->view('form');
		}
		else
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from("sohambadheka008@gmail.com");
			$this->email->to($email);
			$this->email->subject("Email from CodeIgnitor");
			$this->email->message("Have a nice date !");
			
			//Send an email with attachments !!!
			$path=$this->config->item('server_root');
			//echo $path;
			

			if($this->email->send())
			{
				echo "email is successfully sent !";
			}

			else
			{
				echo $this->email->print_debugger();
			}

		}
			
	}
}


?>
