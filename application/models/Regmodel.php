<?php 

class Regmodel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function add($regas)
	{
      if($regas=="student"){
      	$data= array('name'=>$this->input->post('name') ,'phone'=>$this->input->post('phone'),'email'=>$this->input->post('email'),'password'=>$this->input->post('password') );
		$this->db->insert('student',$data);
	}
	if($regas=="employer"){
		$data= array('e_name'=>$this->input->post('name') ,'phone'=>$this->input->post('phone'),'email'=>$this->input->post('email'),'password'=>$this->input->post('password') );
		$this->db->insert('employer',$data);
	}
		
	}


	function updatesdata($fn)
	{
		$data = array('name' => $this->input->post('name') ,'email' => $this->input->post('email'),'phone' => $this->input->post('phone'),'dob' => $this->input->post('dob'),'location' => $this->input->post('location'),'education' => $this->input->post('education'),'aboutme' => $this->input->post('aboutme'),'propic' => $fn);
		$this->db->where('s_id',$this->session->userdata('id'));
		$this->db->update('student',$data);
	}
	function updatesdatan()
	{
		$data = array('name' => $this->input->post('name') ,'email' => $this->input->post('email'),'phone' => $this->input->post('phone'),'dob' => $this->input->post('dob'),'location' => $this->input->post('location'),'education' => $this->input->post('education'),'aboutme' => $this->input->post('aboutme') );
		$this->db->where('s_id',$this->session->userdata('id'));
		$this->db->update('student',$data);
	}

	function eupdatesdata($fn)
	{
		$data = array('e_name' => $this->input->post('name') ,'email' => $this->input->post('email'),'phone' => $this->input->post('phone'),'company' => $this->input->post('company'),'propic' => $fn);
		$this->db->where('e_id',$this->session->userdata('id'));
		$this->db->update('employer',$data);
	}
	function eupdatesdatan()
	{
		$data = array('e_name' => $this->input->post('name') ,'email' => $this->input->post('email'),'phone' => $this->input->post('phone'),'company' => $this->input->post('company'));
		$this->db->where('e_id',$this->session->userdata('id'));
		$this->db->update('employer',$data);
	}


}






?>