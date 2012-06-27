<?php
require_once("db.php");


class User {

	
	function user()
	{
		$this->db =new Database();
	}
	//return user_id
	function signin($email,$password)
	{
		$sql=sprintf("select * from trainers where email='%s' and password='%s'",$email,$password);
		
		$this->db->query($sql);
		
		$signin = $this->db->get('');
		
		if(!empty($signin))
		{
			$signin[0]["logged_in"]=1;
			$this->db->update("trainers",$signin[0],sprintf("trainer_id=%d",$signin[0]["trainer_id"]));
		}
		
		return $signin;
	}
	
	
	function signout($trainer_id)
	{
		$sql=sprintf("update trainers set logged_in=0 where trainer_id=%d ",$trainer_id);
		
		$this->db->query($sql);
		
	}
	
	function getInfo($trainer_id)
	{
		$sql=sprintf("select * from trainers  where trainer_id=%d",$trainer_id);
		
		$this->db->query($sql);
		
		return $this->db->get('');
		
	}
	
	
	function getInfoByEmail($trainer_email)
	{
		$sql=sprintf("select * from trainers where email='%s'",$trainer_email);
		
		$this->db->query($sql);
		
		return $this->db->get('');
		
	}
	
	
	function setInfo($trainer_info)
	{
		$trainer_id = $this->db->insert("trainers",$trainer_info);	
		 	
		return $trainer_id; 
		
	}
	
	function updateInfo($trainer_info)
	{
		/*$data = array(
			"first_name" => $user_info["first_name"],
			"last_name" => $user_info["last_name"],
			"mobile_number" => $user_info["mobile_number"],
			"dob" => $user_info["dob"],
			"email" => $user_info["email"],
			"password" => $user_info["password"],
					
			);*/
				
		return $this->db->update("trainers",$trainer_info,"trainer_id=".$trainer_info["trainer_id"]);	
		
	}
	
	
		
}

?>

