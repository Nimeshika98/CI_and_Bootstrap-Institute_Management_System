<?php 

 class Registration extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 		$this->load->model('Reg_Model');
 	}
	 
	public function savedata()
	{
		$this->load->view('registration_form');

		if($this->input->post('save'))
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$this->Reg_Model->saverecords($name,$email,$mobile);
			echo "Records Saved Successfully";
			/*redirect("Registration/savedata");*/
		}

	}

	public function displaydata(){
		$result['data']=$this->Reg_Model->display_users();
		$this->load->view('display_users',$result);
	}
	public function deletedata()
	{
		$id=$this->input->get('id');
		$this->Reg_Model->delete_users($id);
		redirect("Registration/displaydata");
	}

	public function updatedata()
	{
		$id=$this->input->get('id');
		$result['data']=$this->Reg_Model->displayusersbyid($id);
		$this->load->view('update_users',$result);

		if($this->input->post('update'))
		{
			$id=$this->input->get('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$this->Reg_Model->update_users($id,$name,$email,$mobile);
			echo "Records Update Successfully";
			/*redirect("Registration/savedata");*/
		}
	}
	public function report()
	{
		$result['data']=$this->Reg_Model->display_users();
		$result['Number_of_Students']=count($result['data']);

		$this->load->view('Dbrecord.php',$result);
		// $this->load->view('Display_users', $result);

		
	}
	public function about(){
		$this->load->view('view_about');
	}

 }
?>