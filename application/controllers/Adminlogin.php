<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{
    public function index()
    {
        $logged =   $this->session->userdata('admin_logged');
        if ($logged) {
            redirect('/admin', 'refresh');
        } else {
            //redirect(base_url('admin'));
            $this->load->view('admin/login');
        }
    }
    public function submit()
    {
        $data['admin_email']  =   $this->input->post('email');
        $data['admin_password']  =   $this->input->post('password');
        $result =   $this->db->get_where('admin', $data);
        if ($result->num_rows() > 0) {
            $array_items = array('admin_logged' => true, 'admin_id' => $result->row()->admin_id, 'admin_name' => $result->row()->admin_name);
            $this->session->set_userdata($array_items);
            echo true;
        } else {
            echo false;
        }
    }
    public function forgot_password($para1 = '')
        {
                if ($para1 == "reset") {
                        $query = $this->db->get_where('admin', array('admin_email' => $this->input->post('email')));
                        if ($query->num_rows() > 0) {
                                $hash = md5(time() . $query->row()->admin_uname);
                                $data['admin_hash']     =       $hash;
                                $this->db->update('admin', $data, 'admin_id =' . $query->row()->admin_id);
                                echo $query->row()->admin_email;
                                $this->load->library('email');
                                $config['wordwrap'] = TRUE;
                                $config['mailtype'] = 'html';

                                $this->email->initialize($config);
                                $this->email->from('noreply@hireahelper.com', 'Hire a Helper');
                                $this->email->to($query->row()->admin_email);

                                $this->email->subject('Reset Password');
                                $this->email->message('Password Reset link <a href="' . base_url('/adminlogin/reset?hash=' . $hash) . '">Reset Link</a>');

                                $result = $this->email->send();
                                print_r($result);

                                echo (true);
                        } else {
                                echo (false);
                        }
                } else {
                        $this->load->view('admin/forgot_password');
                }
        }
    public function reset($para1 = '')
    {
        if ($para1 == 'submit') {
            $data['admin_hash'] = $this->input->post('hash');
            $data['admin_email'] = $this->input->post('email');
            $data2['admin_password'] = $this->input->post('password2');
            $data2['admin_hash'] = '';
            $result = $this->db->get_where('admin', $data);
            if ($result->num_rows() > 0) {
                $this->db->where('admin_id',$result->row()->admin_id);
                $this->db->update('admin', $data2);
                echo true;
            } else {
                echo false;
            }
        } else {
            $page_data['hash'] = $this->input->get('hash');
            $result = $this->db->get_where('admin', array('admin_hash' => $page_data['hash']));
            echo 'ok';
            if ($result->num_rows() > 0) {
                $this->load->view('admin/reset_password', $page_data);
            } else {
                redirect(base_url('admin/login'));
            }
        }
    }
}
