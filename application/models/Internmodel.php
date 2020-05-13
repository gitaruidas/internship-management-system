<?php

class Internmodel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function add($fn,$eid)
	{
		$data= array('i_name' =>$this->input->post('irole') ,'description' =>$this->input->post('descrip'),'skill' =>$this->input->post('skill') ,'vacency' =>$this->input->post('vacency'),'closedate' =>$this->input->post('closedate'),'e_id' =>$eid,'pdf' =>$fn);
		if($this->db->insert('internship',$data))
			return true;

	}
	
}

?>