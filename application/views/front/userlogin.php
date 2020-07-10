<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserLogin extends CI_Controller
{
	public function index()
	{
        $logged =   $this->session->userdata('user_logged');
        if($logged){
            redirect('/registration','refresh'); 
        }else{
            //redirect(base_url('admin'));
            $this->load->view('welcome/userlogin');
        }
        
    }
    public function submit(){
        $data['user_email']  =   $this->input->post('email');
        $data['user_password']  =   $this->input->post('password');
        $result =   $this->db->get_where('user_detail',$data);
        if($result->num_rows()>0){
            $array_items = array('user_logged' => true, 'user_id' => $result->row()->user_id, 'user_fname'=> $result->row()->user_fname);
            $this->session->set_userdata($array_items);
            echo true;
        }
        else{
            echo false;
        }
    }
}
