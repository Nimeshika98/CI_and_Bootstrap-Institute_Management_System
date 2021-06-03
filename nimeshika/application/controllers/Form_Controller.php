<?php 
	class Form_Controller extends CI_Controller
	{
		function __construct()
 		{
	 		parent::__construct();
	 		$this->load->helper(array('form'));
	 		$this->load->library(array('form_validation'));
	 	}
	 	public function form(){
	 		$this->form_validation->set_rules('id', 'Student Id', 'required');
	 		$this->form_validation->set_rules('email', 'Email', 'required');

	 		if ($this->form_validation->run() == FALSE) {
	 			$this->load->view('form');
	 		}
	 		else{
	 			$this->load->view('success');
	 		}
	 	}

	 }
 ?>