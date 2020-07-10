<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $logged = $this->session->userdata('admin_logged');
        if (!$logged) {
            redirect(base_url('admin/login'));
        }
    }
    public function index()
    {
        $page['page'] = 'dashboard';
        $page['title'] = 'Dashboard';
        $page['count']['user'] = number_format($this->db->count_all_results('user_detail'));
        $page['count']['service'] = number_format($this->db->count_all_results('service'));
        $page['count']['order'] = number_format($this->db->count_all_results('order_detail'));
        $page['count']['feedback'] = number_format($this->db->count_all_results('contact'));
        $this->load->view('admin/index', $page);
    }

    public function login($para1 = '')
    {
        if ($para1 == 'submit') {
            //get query by username and password
            $query = $this->db->get_where('admin', array('admin_uname' => $this->input->post('username'), 'admin_password' => $this->input->post('password')));
            //check if row selected or not
            if ($query->num_rows() > 0) {
                //set session by getting column admin id from query
                $this->session->userdata('adminid', $query->row()->admin_id);
                echo (true);
            } else {
                echo (false);
            }
        } else {
            $this->load->view('admin/login');
        }
    }

    public function service($para1 = '', $para2 = '')
    {
        if ($para1 == 'delete') {
            $this->db->where('service_id', $para2);
            $this->db->delete('service');
        } elseif ($para1 == 'add') {
            $this->load->view('admin/service_add');
        } elseif ($para1 == 'update') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('service_banner')) {
                $banner_data = $this->upload->data();
                $data['service_banner'] = 'uploads/' . $banner_data['file_name'];
            }

            if ($this->upload->do_upload('icon')) {
                $image_data = $this->upload->data();
                $data['service_icon'] = 'uploads/' . $image_data['file_name'];
            }

            if ($this->upload->do_upload('image')) {
                $image_data = $this->upload->data();
                $data['service_image'] = 'uploads/' . $image_data['file_name'];
            }

            $data['service_name'] = $this->input->post('name');
            $data['service_description'] = $this->input->post('desc');
			$data['service_price'] = $this->input->post('price');
            $this->db->where('service_id', $para2);
            $this->db->update('service', $data);
        } elseif ($para1 == 'insert') {
            $result = $this->db->get_where('route', array('route_url' => $this->input->post('url')));
            if ($result->num_rows() == 0) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);

                $this->upload->do_upload('service_banner');
                $banner_data = $this->upload->data();
                $data['service_banner'] = 'uploads/' . $banner_data['file_name'];

                $this->upload->do_upload('icon');
                $image_data = $this->upload->data();
                $data['service_icon'] = 'uploads/' . $image_data['file_name'];

                $this->upload->do_upload('image');
                $image_data = $this->upload->data();
                $data['service_image'] = 'uploads/' . $image_data['file_name'];

                $data['service_name'] = $this->input->post('name');
                $data['service_description'] = $this->input->post('desc');
                $data['service_url'] = $this->input->post('url');
                $data['service_price'] = $this->input->post('price');
                $this->db->insert('service', $data);
                $id = $this->db->insert_id();
                $data2['route_url'] = $this->input->post('url');
                $data2['route_control'] = 'welcome/service/' . $id;
                $this->db->insert('route', $data2);
            }
        } elseif ($para1 == 'more_add') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            $this->upload->do_upload('image');
            $image_data = $this->upload->data();
            $data['f_bg'] = 'uploads/' . $image_data['file_name'];

            $data['f_sid'] = $para2;
            $data['f_title'] = $this->input->post('title');
            $data['f_desc'] = $this->input->post('desc');
            $this->db->insert('feature_service', $data);
        } elseif ($para1 == 'edit') {
            $page['row'] = $this->db->get_where('service', array('service_id' => $para2))->row_array();
            $this->load->view('admin/service_edit', $page);
        } elseif ($para1 == 'more') {
            $page['sid'] = $para2;
            $page['rows'] = $this->db->get_where('feature_service', array('f_sid' => $para2))->result_array();
            $this->load->view('admin/service_more', $page);
        } elseif ($para1 == 'more_delete') {
            $this->db->where('f_id', $para2);
            $this->db->delete('feature_service');
        } elseif ($para1 == 'list') {
            $page['rows'] = $this->db->get('service')->result_array();
            $this->load->view('admin/service_list', $page);
        } else {
            $page['page'] = 'service';
            $page['title'] = 'Service';
            $this->load->view('admin/index', $page);
        }
    }
    public function subservice($para1 = '', $para2 = '')
    {
        if ($para1 == 'delete') {
            $this->db->where('cservice_id', $para2);
            $this->db->delete('sub_service');
        } elseif ($para1 == 'edit') {
            $page['services'] = $this->db->get('service')->result_array();
            $page['row'] = $this->db->get_where('sub_service', array('cservice_id' => $para2))->row_array();
            $this->load->view('admin/edit_cservice', $page);
        } elseif ($para1 == 'update') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $image_data = $this->upload->data();
            $data['c_icon'] = 'uploads/' . $image_data['file_name'];
            $data['c_name'] = $this->input->post('name');
            $data['cservice_service'] = $this->input->post('service');
            $this->db->where('cservice_id', $para2);
            $this->db->insert('sub_service', $data);
        } elseif ($para1 == 'add') {
            $page['services'] = $this->db->get('service')->result_array();
            $this->load->view('/admin/add_cservice', $page);
        } elseif ($para1 == 'insert') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $image_data = $this->upload->data();
            $data['c_icon'] = 'uploads/' . $image_data['file_name'];
            $data['c_name'] = $this->input->post('name');
            $data['cservice_service'] = $this->input->post('service');
            $this->db->insert('sub_service', $data);
        } elseif ($para1 == 'list') {
            $this->db->join('service', 'service.service_id = sub_service.cservice_id');
            $page['rows'] = $this->db->get('sub_service')->result_array();
            $this->load->view('/admin/subservice_list', $page);
        } else {
            $page['page'] = 'subservice';
            $page['title'] = 'SubService';
            $this->load->view('admin/index', $page);
        }
    }
    public function users($para1 = '', $para2 = '')
    {
        if ($para1 == 'delete') {
            $this->db->where('user_id', $para2);
            $this->db->delete('user_detail');
        } elseif ($para1 == 'add') {
            $this->load->view('admin/login');
        } elseif ($para1 == 'edit') {
            $page['row'] = $this->db->get_where('user_detail', array('user_id' => $para2))->row_array();
            $this->load->view('admin/user_edit', $page);
        } elseif ($para1 == 'list') {
            $page['rows'] = $this->db->get('user_detail')->result_array();
            $this->load->view('admin/users_list', $page);
        } elseif ($para1 == 'view') {
            $page['row'] = $this->db->get_where('user_detail', array('user_id' => $para2))->row_array();
            $this->load->view('admin/user_view', $page);
        } else {
            $page['page'] = 'users';
            $page['title'] = 'User Detail';
            $this->load->view('admin/index', $page);
        }
    }
    public function feedback($para1 = '', $para2 = '')
    {

        if ($para1 == 'delete') {
            $this->db->where('contact_id', $para2);
            $this->db->delete('contact');
        } elseif ($para1 == 'list') {
            $this->db->order_by('contact_id', 'desc');
            $page['rows'] = $this->db->get('contact')->result_array();
            $this->load->view('admin/feedback_list', $page);
        } elseif ($para1 == 'view') {
            $page['row'] = $this->db->get_where('contact', array('contact_id' => $para2))->row_array();
            $this->load->view('admin/feedback', $page);
        } else {
            $page['page'] = 'feedback';
            $page['title'] = 'Feedback';
            $this->load->view('admin/index', $page);
        }
    }
    public function orders($para1 = '', $para2 = '')
    {
        if ($para1 == 'delete') {
            $this->db->where('order_id', $para2);
            $this->db->delete('order_detail');
        } elseif ($para1 == 'status') {
            $data['order_status'] = $this->input->get('status');
            $this->db->where('order_id', $para2);
            $this->db->update('order_detail', $data);
        } elseif ($para1 == 'add') {
            $this->load->view('admin/order_add');
        } elseif ($para1 == 'edit') {
            $page['row'] = $this->db->get_where('user_detail', array('order_id' => $para2))->row_array();
            $this->load->view('admin/order_edit', $page);
        } elseif ($para1 == 'list') {
            $this->db->order_by('order_id', 'desc');
            $this->db->join('service', 'order_detail.order_service = service.service_id');
            $page['rows'] = $this->db->get('order_detail')->result_array();
            $this->load->view('admin/orders_list', $page);
        } elseif ($para1 == 'view') {
            $this->db->join('service', 'order_detail.order_service = service.service_id');
            $page['row'] = $this->db->get_where('order_detail', array('order_id' => $para2))->row_array();
            $this->load->view('admin/order_view', $page);
        } else {
            $page['page'] = 'orders';
            $page['title'] = 'Order Detail';
            $this->load->view('admin/index', $page);
        }
    }
    public function logout()
    {
        $array_items = array('admin_logged', 'admin_id', 'admin_name');
        $this->session->unset_userdata($array_items);
        redirect(base_url('admin/login'));
    }
}
