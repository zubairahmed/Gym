<?php

require_once("db.php");

class Log {

	function Log()
	{
		$this->db =new Database();
	}
	
	//posts a message to message board
	function add($key,$value)
	{ 
				
		$data = array(
			"log_key" => $key,
			"log_value" => $value
			);
				
		return $this->db->insert("log",$data);		
		
	}
	function clearKey($key)
	{
		$this->db->delete("log","log_key='".$key."'");		
	}
	
	function getValue($key)
	{
		
		$this->db->select("log","log_id desc","log_key='".$key."'");
		$rs=$this->db->get_first('');
		
		return $rs;
		
		
	}
	function clear()
	{
		$this->db->delete("log",1);		
	}
		
	
	
}
?>