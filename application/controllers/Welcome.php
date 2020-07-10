<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data['islogged'] = $this->session->has_userdata('userid');
        $data['services'] = $this->db->get('service')->result_array();
        $this->load->vars($data);
    }

    public function index()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = '';
        }

        $ipaddress = explode(',', $ipaddress);
        $geo = json_decode(file_get_contents("http://ipinfo.io/" . $ipaddress[0] . "/geo"));
        $page_data['postal'] = (isset($geo->postal) ? $geo->postal : '');
        $page_data['page'] = "home";
        //$page_data['services']    =    $this->db->get('service')->result_array();
        $this->load->view('front/index', $page_data);
    }
    public function booking($para1 = '')
    {
        $page_data['subservices'] = $this->db->get_where('sub_service', array('cservice_service' => $para1))->result_array();
        $page_data['row'] = $this->db->get_where('service', array('service_id' => $para1))->row_array();
        $page_data['page'] = "booking";
        $this->load->view('front/index', $page_data);
    }
    public function savedata()
    {
        $data['user_fname'] = $this->input->post('fn');
        $data['user_lname'] = $this->input->post('ln');
        $data['user_email'] = $this->input->post('email');
        $data['user_passward'] = $this->input->post('pass');
        $data['user_mobile'] = $this->input->post('mob');
        $this->db->insert('user_detail', $data);
    }
    public function signup()
    {
        $this->load->view('registration');
    }
    public function home()
    {
        $this->load->view('home');
    }

    public function user_order()
    {
        $amount = 0;
        $discount = 0;
        $amount += $this->db->get_where('service', array('service_id' => $this->input->post('serviceid')))->row()->service_price;
        $amount *= $this->input->post('worktime');
        $amount += $this->input->post('ladder') * 5;
        $data1['houseItems'] = $this->input->post('houseItems');
        $amount += $data1['houseItems']['small'] * 25;
        $amount += $data1['houseItems']['small'] * 50;
        $data1['ladder'] = $this->input->post('ladder');
        $data1['worktime'] = $this->input->post('worktime');
        $data1['detail'] = $this->input->post('detail');
        $address['address'] = $this->input->post('address');
        $address['city'] = $this->input->post('city');
        $address['pincode'] = $this->input->post('pincode');
        $data['order_user'] = $this->session->userdata('userid');
        $data['order_service'] = $this->input->post('serviceid');
        $data['order_fn'] = $this->input->post('name');
        $data['order_email'] = $this->input->post('email');
        $data['order_mob'] = $this->input->post('phn');
        $data['order_discount'] = $discount;
        $data['order_total'] = $amount;
        $data['order_address'] = json_encode($address, true);
        $data['order_detail'] = json_encode($data1, true);
        $data['choose_date'] = date('Y-m-d', strtotime($this->input->post('dateStart')));
        $data['choose_time'] = date('H:i:s', strtotime($this->input->post('time')));
        $this->db->insert('order_detail', $data);
        /* $amount = 0;
    $discount = 0;
    $amount += $this->db->get_where('service', array('service_id' => $this->input->post('serviceid')))->row()->service_price;
    $extras = (array) $this->input->post('extra_service');
    foreach ($extras as $key => $value) {
    $amount += $this->db->get_where('sub_service', array('cservice_id' => $value))->row()->c_price;
    }
    $result = $this->db->get_where('coupon', array('coupon_id' => $this->input->post('code')));
    if ($result->num_rows() > 0) {
    if ($result->row()->is_flat) {
    $discount += $result->row()->coupon_discount;
    } else {
    $discount += $amount / 100 * $result->row()->coupon_discount;
    }
    }
    $address['address'] = $this->input->post('address');
    $address['city'] = $this->input->post('city');
    $address['pincode'] = $this->input->post('pincode');
    $data['order_user'] =    $this->session->userdata('userid');
    $data['order_service'] =    $this->input->post('serviceid');
    $data['order_fn'] = $this->input->post('firstname');
    $data['order_ln'] = $this->input->post('lastname');
    $data['order_email'] = $this->input->post('email');
    $data['order_mob'] = $this->input->post('phn');
    $data['order_discount'] = $discount;
    $data['order_total'] = $amount;
    $data['order_address'] = json_encode($address);
    $data['select_extras'] = json_encode($this->input->post('extra_service'));
    $data['often'] = $this->input->post('often');
    $data['promo_code'] = $this->input->post('code');
    $this->db->insert('order_detail', $data); */
    }

    public function order()
    {
        $page_data['page'] = "booking";
        $this->load->view('front/index', $page_data);
    }
    public function service($para1 = "", $para2 = '')
    {
        if ($para1 != '') {
            if ($para2 == 'booking') {
                if (!$this->session->has_userdata('userid')) {
                    redirect(base_url('login'));
                }

                if ($this->input->post('postal')) {
                    $postal = json_decode(file_get_contents("https://api.postalpincode.in/pincode/" . $this->input->post('postal')), true);
                    $page_data['address'] = $postal[0]['PostOffice'][0];
                }
                $page_data['subservices'] = $this->db->get_where('sub_service', array('cservice_service' => $para1))->result_array();
                $page_data['row'] = $this->db->get_where('service', array('service_id' => $para1))->row_array();
                $page_data['user'] = $this->db->get_where('user_detail', array('user_id' => $this->session->userdata('userid')))->row_array();
                $page_data['page'] = "booking";
                $this->load->view('front/index', $page_data);
            } else {
                if ($this->input->post('postal')) {
                    $postal = json_decode(file_get_contents("https://api.postalpincode.in/pincode/" . $this->input->post('postal')), true);
                    $page_data['address'] = $postal[0]['PostOffice'][0];
                }
                $this->load->helper('date');
                $s1 = date('d-m-Y', strtotime(' + 1 day')); // Added one day to start from 03-05-2018
                $s2 = date('d-m-Y', strtotime($s1 . ' + 45 day')); //Added one day to end with 08-05-2018
                $start = new DateTime($s1);
                $end = new DateTime($s2);
                $interval = DateInterval::createFromDateString('1 day');
                $page_data['period'] = new DatePeriod($start, $interval, $end);

                $page_data['page'] = "service_detail";
                $page_data['row'] = $this->db->get_where('service', array('service_id' => $para1))->row_array();
                $page_data['row2'] = $this->db->get_where('service_feature', array('sf_service' => $para1))->result_array();
                $page_data['row3'] = $this->db->get_where('feature_service', array('f_sid' => $para1))->result_array();
                $this->load->view('front/index', $page_data);
            }
        } else {
            $page_data['page'] = "service";
            $page_data['services'] = $this->db->get('service')->result_array();
            $page_data['row'] = $this->db->get_where('service_feature', array('sf_id' => $para1))->row_array();
            $this->load->view('front/index', $page_data);
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('userid');
        redirect(base_url());
    }
    public function login($para1 = '')
    {
        if ($para1 == "submit") {
            $data['user_email'] = $this->input->post('email');
            $data['user_password'] = base64_encode($this->input->post('pass'));
            $result = $this->db->get_where('user_detail', $data);
            if ($result->num_rows() > 0) {
                $row = $result->row_array();
                $this->session->set_userdata('userid', $row['user_id']);
                $output['status'] = true;
            } else {
                $output['status'] = false;
            }
            echo json_encode($output);
        } elseif ($para1 == 'valid') {
            echo $this->session->has_userdata('userid');
        } else {
            $page_data['page'] = "login";
            $this->load->view('front/index', $page_data);
        }
    }
    public function forgot_password($para1 = '', $para = '')
    {
        if ($para1 == "reset") {
            $query = $this->db->get_where('user_detail', array('user_email' => $this->input->post('email')));
            if ($query->num_rows() > 0) {
                $hash = mt_rand(100000, 999999);
                $data['user_hash'] = $hash;
                $this->db->update('user_detail', $data, 'user_id =' . $query->row()->user_id);
                $query->row()->user_email;
                $this->load->library('email');
                $config['wordwrap'] = true;
                $config['mailtype'] = 'html';

                $this->email->initialize($config);
                $this->email->from('noreply@hireahelper.com', 'Hire a Helper');
                $this->email->to($query->row()->user_email);

                $this->email->subject('Reset Password');
                $this->email->message('Your one Time code is <b>' . $hash . '</b>');

                $result = $this->email->send();

                $output['status'] = true;
                $output['email'] = $this->input->post('email');
            } else {
                $output['status'] = false;
            }
            echo json_encode($output);
        } elseif ($para1 == "otp") {
            $uArray['user_email'] = $this->input->post('email');
            $uArray['user_hash'] = $this->input->post('otp');
            $result = $this->db->get_where('user_detail', $uArray);
            if ($result->num_rows() > 0) {
                $data['user_password'] = base64_encode($this->input->post('password1'));
                $this->db->where('user_id', $result->row()->user_id);
                $this->db->update('user_detail', $data);
                $output['status'] = true;
            } else {
                $output['status'] = false;
            }
            echo json_encode($output);
        } else {
            $this->load->view('admin/forgot_password');
        }
    }
    public function resetp()
    {
        $this->load->view('front/reset_password');
    }
    public function register($para1 = '')
    {
        if ($para1 == "submit") {
            //check if email exist or not
            $result = $this->db->get_where('user_detail', array('user_email' => $this->input->post('email')));
            if ($result->num_rows() > 0) {
                $output['status'] = false;
            } else {
                $otp = mt_rand(100000, 999999);

                $data['user_fname'] = $this->input->post('fname');
                $data['user_lname'] = $this->input->post('lname');
                $data['user_email'] = $this->input->post('email');
                $data['user_mobile'] = $this->input->post('mob');
                $data['user_password'] = base64_encode($this->input->post('pass'));

                $data['user_otp'] = $otp;

                $this->db->insert('user_detail', $data);
                $this->load->library('email');
                $config['wordwrap'] = true;
                $config['mailtype'] = 'html';

                $this->email->initialize($config);
                $this->email->from('noreply@hireahelper.com', 'Hire a Helper');
                $this->email->to($this->input->post('email'));

                $this->email->subject('Activate Account');
                $this->email->message('Your one Time code is <b>' . $otp . '</b>');

                $result = $this->email->send();
                $output['status'] = true;
                $output['type'] = 'register';
                $output['email'] = $this->input->post('email');
            }
            echo (json_encode($output));
        } elseif ($para1 == 'otp') {
            $data['user_email'] = $this->input->post('email');
            $data['user_otp'] = $this->input->post('otp');
            $result = $this->db->get_where('user_detail', $data);
            if ($result->num_rows() > 0) {
                $row = $result->row_array();
                $data2['user_otp'] = "";
                $data2['user_verified'] = true;
                $data2['user_activated'] = true;
                $this->db->where('user_id', $row['user_id']);
                $this->db->update('user_detail', $data2);

                $this->session->set_userdata('userid', $row['user_id']);
                $output['status'] = true;
                $output['type'] = 'otp';
            } else {
                $output['status'] = false;
                $output['type'] = 'otp';
            }
            echo (json_encode($output));
        } else {}
    }
    public function about()
    {
        $page_data['page'] = 'aboutus';
        $this->load->view('front/index.php', $page_data);
    }
    public function contactus($para1 = '')
    {
        if ($para1 == 'submit') {
            $data['contact_name'] = $this->input->post('name');
            $data['contact_email'] = $this->input->post('email');
            $data['contact_subject'] = $this->input->post('subject');
            $data['contact_phone'] = $this->input->post('phone');
            $data['contact_message'] = $this->input->post('message');
            $this->db->insert('contact', $data);
        } else {
            $page_data['page'] = 'contacts';
            $this->load->view('front/index.php', $page_data);
        }
    }
    //  public function registration($para = "")
    //  {
    //          $page_data['page']    =    "registration";
    //          $page_data['login'] = $this->db->get('user_detail')->result_array();
    //          $this->load->view('front/index', $page_data);
    //  }
    public function userlogin($para1 = '')
    {
        if ($para1 == 'submit') {
            //get query by username and password
            $query = $this->db->get_where('user_detail', array('user_email' => $this->input->post('user_email'), 'user_password' => base64_encode($this->input->post('password'))));
            //check if row selected or not
            if ($query->num_rows() > 0) {
                //set session by getting column admin id from query
                $this->session->userdata('userid', $query->row()->user_id);
                echo (true);
            } else {
                echo (false);
            }
        } else {
            $this->load->view('user/login');
        }
    }
    public function service2()
    {
        $page_data['page'] = "service2";
        //$page_data['services'] = $this->db->get('service')->result_array();
        $this->load->view('front/index', $page_data);
    }
    public function user($para1 = '', $para2 = '', $para3 = '')
    {
        $logged = $this->session->has_userdata('userid');
        if (!$logged) {
            redirect(base_url());
        }
        if ($para1 == 'orders') {
            if ($para2 == 'cancel') {
                $data['order_status'] = 'cancel';
                $this->db->where('order_id', $para3);
                $this->db->update('order_detail', $data);
            } elseif ($para2 == 'invoice') {
                $this->db->where('order_id', $para3);
                $page_data = $this->db->get('order_detail')->row_array();
                $this->load->view('front/user/invoice', $page_data);
            } else {
                $this->db->order_by('order_id', 'desc');
                $this->db->join('service', 'order_service = service_id');
                $page_data['orders'] = $this->db->get_where('order_detail', array('order_user' => $this->session->userdata('userid')))->result_array();
                //$page_data['page']    =    'user/orders';
                $this->load->view('front/user/orders', $page_data);
            }
        } elseif ($para1 == 'detail') {
            if ($para2 == 'password') {
                $data['user_password'] = base64_encode($this->input->post('password'));
                $this->db->where('user_id', $this->session->userdata('userid'));
                $this->db->update('user_detail', $data);
            } elseif($para2 == 'update'){
				$data['user_fname'] = $this->input->post('firstname');
				$data['user_lname'] = $this->input->post('lastname');
				$data['user_mobile'] = $this->input->post('phone');
				$data['user_email'] = $this->input->post('email');
                $this->db->where('user_id', $this->session->userdata('userid'));
                $this->db->update('user_detail', $data);
			} else {
                $page_data['user'] = $this->db->get_where('user_detail', array('user_id' => $this->session->userdata('userid')))->row_array();
                $this->load->view('front/user/detail', $page_data);
            }
        } else {
            $page_data['page'] = 'user/index';
            $this->load->view('front/index', $page_data);
        }
    }
    public function newsletter()
    {
        $data['newsletter_email'] = $this->input->get('email');
        $this->db->insert('newsletter', $data);
    }
    public function promocode($para1 = '')
    {
        $result = $this->db->get_where('coupon', array('coupon_code' => strtoupper($para1), 'coupon_active' => true));
        if ($result->num_rows() > 0 && $para1 != '') {
            $row = $result->row_array();
            $output['status'] = true;
            $output['discount'] = $row['coupon_discount'];
            $output['type'] = ($row['is_flat'] == true ? 'flat' : 'percent');
        } else {
            $output['status'] = false;
        }
        echo (json_encode($output));
    }
}
