<?php 
	class Reg_Model extends CI_Model
	{
		public function saverecords($name,$email,$mobile){
				$query="insert into users values('', '$name','$email', '$mobile')";
				$this->db->query($query);

		}

		public function display_users(){
			$query=$this->db->query('select * from users');
			return $query->result();
		}

		public function delete_users($id){
			$this->db->query("delete from users where id= '".$id."'");
		}

		public function displayusersbyid($id){
			$query=$this->db->query("select * from users where id= '".$id."'");
			return $query->result();
		}

		public function update_users($id,$name,$email,$mobile)
		{
			$query=$this->db->query("update users SET name='$name', email='$email', mobile='$mobile' where id='".$id."'" );
		}
		 //public function totalEmp()
		// {
		// $query = $this->db->query("SELECT SUM(name) AS cc FROM users");
		// return $query-> result();
		// }

	}

 ?>