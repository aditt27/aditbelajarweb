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
}
