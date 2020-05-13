<?php

/**
 * 
 */
class Profilecon extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function index()
	{
		if($this->session->userdata('role')=='student')
		{
			$this->db->select('*');
			$this->db->from('student');
			$this->db->where('s_id',$this->session->userdata('s_id'));
			$query=$this->db->get();
			$data['row']=$query->result_array();

			$this->load->view('/include/header');
			$this->load->view('profile',$data);
			$this->load->view('/include/footer');
		}
	}

	function updateprofile()
	{
		
	}
}