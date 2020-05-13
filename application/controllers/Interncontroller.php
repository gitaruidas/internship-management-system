<?php 


class Interncontroller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Internmodel');
		 $this->load->helper(array('form', 'url'));
		
	}

	function createintern()
	{
		if($this->session->userdata('logas')=='employer')
		{
			$eid = $this->session->userdata('id');
			$query=$this->db->get_where('internship',array('e_id' => $eid));
			$data['records']=$query->result();


				$this->load->view('/include/header');
				$this->load->view('createinternship',$data);
				$this->load->view('/include/footer');
		}
		else
		{
			redirect('/Admin/login');
		}

	}

	function insert()
	{
		$eid=$this->session->userdata('id');
		/*$data= array('name' =>$this->input->post('irole') ,'description' =>$this->input->post('descrip'),'skill' =>$this->input->post('skill') ,'vacency' =>$this->input->post('vacency'),'closedate' =>$this->input->post('closedate'),'e_id' =>$eid);*/

		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|docx';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('pdffile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        echo $error;
                }
        else
                {
                	$fd = $this->upload->data();
                	$fn = $fd['file_name'];
                	if($this->Internmodel->add($fn,$eid))
                	{
                		$this->createintern();
                	}
                }
	}

	function viewintern()
	{
	       $this->db->select('*');
           $this->db->from('internship');
           $this->db->join('employer', 'employer.e_id = internship.e_id');

                $query=$this->db->get();
			    $data['records']=$query->result();

				$this->load->view('/include/header');
				$this->load->view('viewinternship',$data);
				$this->load->view('/include/footer');
	}
	function applicant()
	{

		       $this->db->select('*');
               $this->db->from('application');

               $this->db->join('internship', 'internship.i_id = application.i_id');

               $this->db->join('student', 'student.s_id = application.s_id');

               //$this->db->join('internship', 'internship.e_id = application.e_id');

               $this->db->where('internship.e_id',$this->session->userdata('id'));

               $query=$this->db->get();
			   $data['records']=$query->result();


		       $this->load->view('/include/header');
			   $this->load->view('applicant',$data);
			   $this->load->view('/include/footer');
			   //print_r($data);
	}

	function verifyapplicant()
	{

		       $this->db->select('*');
               $this->db->from('application');

               $this->db->join('internship', 'internship.i_id = application.i_id');

               $this->db->join('student', 'student.s_id = application.s_id');

               //$this->db->join('internship', 'internship.e_id = application.e_id');

               $this->db->where('application.e_status',1);

               $query=$this->db->get();
			   $data['records']=$query->result();


		       $this->load->view('/include/header');
			   $this->load->view('verifyapplicant',$data);
			   $this->load->view('/include/footer');
			   //print_r($data);
	}


	function enrole()
	{
		$sid=$this->session->userdata('id');
		$iid=$this->uri->segment(3);
		//echo $sid;
		//echo $iid;
		$data = array('s_id' => $sid,'i_id'=>$iid );
		$this->db->insert('application',$data);
		redirect('Interncontroller/viewintern'); 
	}

	function myintern()
	{


		 $this->db->select('*');
           $this->db->from('application');

           $this->db->join('internship', 'internship.i_id = application.i_id');

           $this->db->join('employer', 'employer.e_id = internship.e_id');

             $this->db->where('s_id',$this->session->userdata('id'));

                $query=$this->db->get();
			    $data['records']=$query->result();


		        $this->load->view('/include/header');
				$this->load->view('myinternship',$data);
				$this->load->view('/include/footer');
	}


	function accept()
	{
		   //$eid=$this->session->userdata('id');
		   $iid=$this->uri->segment(3);
		   $sid=$this->uri->segment(4);

		   
		   //$data = array('i_id'=>$iid,'s_id' => $sid );
		    $this->db->set('e_status',1);
			$this->db->where(array('i_id'=>$iid,'s_id' => $sid ));
			$this->db->update('application');
            redirect('Interncontroller/applicant');
	}

    function reject()
    {
    		//$eid=$this->session->userdata('id');
		   $iid=$this->uri->segment(3);
		   $sid=$this->uri->segment(4);

		   
		   //$data = array('i_id'=>$iid,'s_id' => $sid );
		    $this->db->set('e_status',2);
			$this->db->where(array('i_id'=>$iid,'s_id' => $sid ));
			$this->db->update('application');
           redirect('Interncontroller/applicant');
    }

    function taccept()
	{
		   //$eid=$this->session->userdata('id');
		   $iid=$this->uri->segment(3);
		   $sid=$this->uri->segment(4);

		   
		   //$data = array('i_id'=>$iid,'s_id' => $sid );
		    $this->db->set('a_status',1);
		    $this->db->set('status',1);
			$this->db->where(array('i_id'=>$iid,'s_id' => $sid ));
			$this->db->update('application');
            redirect('Interncontroller/verifyapplicant');
	}

    function treject()
    {
    		//$eid=$this->session->userdata('id');
		   $iid=$this->uri->segment(3);
		   $sid=$this->uri->segment(4);

		   
		   //$data = array('i_id'=>$iid,'s_id' => $sid );
		    $this->db->set('a_status',2);
		    $this->db->set('status',2);
			$this->db->where(array('i_id'=>$iid,'s_id' => $sid ));
			$this->db->update('application');
            redirect('Interncontroller/verifyapplicant');
    }

    function createnotice()
    {           
               if($this->session->userdata('logas')=='admin')
		{
			   $query=$this->db->get('notice');
			   $data['records']=$query->result();

    	        $this->load->view('/include/header');
				$this->load->view('createnotice',$data);
				$this->load->view('/include/footer');

        } 
	 
    }

    function donotice()
    {
    	$data = array('name' => $this->input->post('name'),'description' => $this->input->post('description'),'date' => $this->input->post('date') );
		$this->db->insert('notice',$data);
		redirect('Interncontroller/createnotice'); 
    }

    function viewnotice()
    {
    	 $nid= $this->uri->segment(3);
    	 $query=$this->db->get_where('notice',array('n_id'=>$nid));
			   $data['records']=$query->result_array();


    	        $this->load->view('/include/header');
				$this->load->view('viewnotice',$data);
				$this->load->view('/include/footer');
    }

    function snotice()
    {
    	  $query=$this->db->get('notice');
			   $data['records']=$query->result();

    	        $this->load->view('/include/header');
				$this->load->view('snotice',$data);
				$this->load->view('/include/footer');
    }
}

?>

