<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function view()
    {
        if($this->session->userdata('status') == "login"){
            redirect(base_url("admin"));
        } else {
            $this->load->view('admin/loginadmin.php');
        }

    }

    function validate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username=='admin' && $password=='1234') {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("admin"));
        } else {
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}