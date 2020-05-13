<?php

class Admin extends CI_Controller
{
	
	function __construct()
	{
	  parent::__construct();
	}


	function index()
	{
		if($this->session->userdata('logas')=='employer' or $this->session->userdata('logas')=='admin')
		{
		$this->load->view('/include/header');
		$this->load->view('index');
		$this->load->view('/include/footer');
		}
	}
	function sprofile()
	{
		if($this->session->userdata('logas')=='student')
		{
			$this->db->select('*');
			$this->db->from('student');
			$this->db->where('s_id',$this->session->userdata('id'));
			$query=$this->db->get();
			$data['row']=$query->result_array(); 

			$query2=$this->db->get('notice');
			$data['row2']=$query2->result();

		$this->load->view('/include/header');
		$this->load->view('profile',$data);
		$this->load->view('/include/footer');
		}
	}

	function eprofile()
	{
		if($this->session->userdata('logas')=='employer')
		{
			$this->db->select('*');
			$this->db->from('employer');
			$this->db->where('e_id',$this->session->userdata('id'));
			$query=$this->db->get();
			$data['row']=$query->result_array(); 

		$this->load->view('/include/header');
		$this->load->view('eprofile',$data);
		$this->load->view('/include/footer');
		}
	}
	function login()
	{
		$this->load->view('login');
	}
	function insert()
	{
		$regas=$this->input->post('regas');

		$this->Regmodel->add($regas);
		//header("location:/login.php");
		$this->login();
	}
	function logindo()
	{
	  $regas=$this->input->post('regas');
	  $data= array('email' =>$this->input->post('email'), 'password'=>$this->input->post('password'));
	  //echo $regas;	
	  //print_r($data);
	  if($regas == "student")
	  {
	  	$query=$this->db->get_where('student',$data);
	  	$row=$query->result_array();
			  if($row)
			  {
			  	//echo "login successfull";
			  	$this->session->set_userdata('uid',$this->input->post('email'));
			  	$this->session->set_userdata('logas',$regas);
			  	$this->session->set_userdata('id',$row[0]['s_id']);
			  	$this->session->set_userdata('pic',$row[0]['propic']);

			  	//echo $this->session->userdata('logas');
			  	//echo $this->session->userdata('uid');
			  	redirect('Admin/sprofile');
			  }
			  else 
			  {
			  	echo "login failed!!..";
			}
	  }
	  if($regas == "employer")
	  {
	  	 
         $query=$this->db->get_where('employer',$data);
         $row=$query->result_array();
			  if($row)
			  {
			//$eid=$row[0]['e_id'];
				//echo 
			  	//echo "login successfull";
			  	$this->session->set_userdata('uid',$this->input->post('email'));
			  	$this->session->set_userdata('logas',$regas);
			  	$this->session->set_userdata('id',$row[0]['e_id']);
			  	$this->session->set_userdata('pic',$row[0]['propic']);

			  	redirect('Admin');
			  	//echo $this->session->userdata('logas');
			  	//echo $this->session->userdata('uid');
			  	//echo $this->session->userdata('id');
			  }
			  else 
			  {
			  	echo "login failed!!..";
			}
	  }
	  if($regas == "admin")
	  {
	  	 
         $query=$this->db->get_where('admin',$data);
         $row=$query->result_array();
			  if($row)
			  {
			//$eid=$row[0]['e_id'];
				//echo 
			  	//echo "login successfull";
			  	$this->session->set_userdata('uid',$this->input->post('email'));
			  	$this->session->set_userdata('logas',$regas);
			  	$this->session->set_userdata('id',$row[0]['a_id']);
			  	$this->session->set_userdata('pic',$row[0]['propic']);

			  	redirect('Admin');
			  	//echo $this->session->userdata('logas');
			  	//echo $this->session->userdata('uid');
			  	//echo $this->session->userdata('id');
			  }
			  else 
			  {
			  	echo "login failed!!..";
			}
	  }
	}

	function updatesdata()
	{
			$config['upload_path']='./uploads/propic';
			$config['allowed_types']='jpeg|png|jpg';
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('propic'))
			{
				//$error = array('error' => $this->upload->display_errors());
						/*$this->load->view('/include/header');
                        $this->load->view('telibrery', $error);
                        $this->load->view('/include/footer');*/
                 //print_r($error);
                  $this->Regmodel->updatesdatan();
					header("location:sprofile");      
			}
			else
			{
				$fd=$this->upload->data();
				$fn=$fd['file_name'];
				//print_r($fd);
				$this->Regmodel->updatesdata($fn);
				header("location:sprofile");
			}
	}
	
	function eupdatesdata()
	{
			$config['upload_path']='./uploads/propic';
			$config['allowed_types']='jpeg|png|jpg';
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('propic'))
			{
				//$error = array('error' => $this->upload->display_errors());
						/*$this->load->view('/include/header');
                        $this->load->view('telibrery', $error);
                        $this->load->view('/include/footer');*/
                 //print_r($error);
                  $this->Regmodel->eupdatesdatan();
					header("location:eprofile");      
			}
			else
			{
				$fd=$this->upload->data();
				$fn=$fd['file_name'];
				//print_r($fd);
				$this->Regmodel->eupdatesdata($fn);
				header("location:eprofile");
			}
	}
	


}
?>