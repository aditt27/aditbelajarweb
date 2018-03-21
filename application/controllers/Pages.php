<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profillulusan_model');
        $this->load->model('peluangkerja_model');
        $this->load->helper('url_helper');
        $this->load->helper('file');
    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        if($page === 'home') {
            //hitcounter for homepage
            $hitcounter = (int)file_get_contents(APPPATH.'/logs/hitcounter.txt');
            $plushitcounter = $hitcounter+1;
            file_put_contents(APPPATH.'/logs/hitcounter.txt',$plushitcounter);
            $data['counter'] = $plushitcounter;

            $data['profil'] = $this->profillulusan_model->get_data();
            $data['peluang'] = $this->peluangkerja_model->get_data();
            $this->load->view('pages/home', $data);
        } else {
            $this->load->view('pages/'.$page);
        }
    }

    function send_mail() {
        if(isset($_POST['submit'])){
            $to = "adit393270@gmail.com";
            $from = $_POST['email'];
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $subject2 = "Copy of your form submission: " . $_POST['subject'];
            $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
            $message2 = "Here is a copy of your message " . $name . ":\n\n" . $_POST['message'];
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            if(!empty($from) && !empty($name) && !empty($subject && !empty($message))) {
                if(mail($to,$subject,$message,$headers) && mail($from,$subject2,$message2,$headers2)) {
                    $this->session->set_flashdata('modal','sukses');
                } else {
                    $this->session->set_flashdata('modal','error');
                }
            }
            else {
                $this->session->set_flashdata('modal','kosong');
            }
            redirect('/', 'refresh');
        }
    }
}
