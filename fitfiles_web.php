<?php
include_once("classes/user.php");

//returns json when used by iphone and returns array when used by php

function FitFilesRequest($params,$output_type="array")
{

switch($params["op"])
{
case "signin":

			$user_obj=new User();
			$result["info"]=$user_obj->signin($params["email"],$params["password"]);
			$result["info"]=$result["info"][0];
			if(empty($result["info"]))
			{
				$output = array("is_error"=>"yes","error"=>"Incorrect Login information");
				
			}else
			{
				
				$output = array("is_error"=>"","error"=>"");
			}	
			
			$result["status"]=$output;
			break;

case "signout":

			$user_obj=new User();
			$user_obj->signout($params["user_id"]);
			$output = array("is_error"=>"","error"=>"");
			$result["info"]=NULL;
			$result["status"]=$output;
			break;	
			
case "signup":

			$user_obj=new User();
			$result["info"]=$user_obj->getInfoByEmail($params["email"]);
			$result["info"]=$result["info"][0];
			
			if(!empty($result["info"]))
			{
				$result["info"]=NULL;
				$output = array("is_error"=>"yes","error"=>"Email already exists.Please try loggin in or click forgot password in signin screen");
		    	$result["status"]=$output;	
			
			}else
			{
				$data = array(
				
				"first_name" => $params["first_name"],
				"last_name" => $params["last_name"],
				"phone" => $params["phone"],
				"email" => $params["email"],
				"password" => $params["password"],
						
				);
				
				$user_id = $user_obj->setInfo($data);
				$result["info"]=$user_obj->getInfo($user_id);
				
				$result["info"]=$result["info"][0];
			
				if(empty($result["info"]))
				{
					$output = array("is_error"=>"yes","error"=>"Trainer can not be added, please verify your submitted data");					
				}else
				{
					
					$output = array("is_error"=>"","error"=>"");
				}	
				
				$result["status"]=$output;
			
			
					
			}	
			
			break;

		 	  							
default:
			
		$output = array("is_error"=>"yes","error"=>"Request type not supported");		
			
}
	
	if($output_type=="array")
	{
		return $result;
	
	}else
	{
		
		return json_encode($result);	
	}
	

	
}



?>