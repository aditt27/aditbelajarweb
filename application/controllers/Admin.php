<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        $this->load->model('profillulusan_model');
        $this->load->model('peluangkerja_model');
    }

    public function view()
    {
        $data['profil'] = $this->profillulusan_model->get_data();
        $data['peluang'] = $this->peluangkerja_model->get_data();
        $this->load->view('admin/adminpanel.php', $data);
    }

    public function addPeluangItem() {
        if(isset($_POST['addpeluangitem'])){
            //proses simpan dilakukan
            $this->peluangkerja_model->add_data($_POST);
        }
    }

    public function updatePeluangItem() {
        if(isset($_POST['updatepeluangitem'])){
            //proses simpan dilakukan
            $this->peluangkerja_model->update_data($_POST);
        }
    }

    public function removePeluangItem() {
        if(isset($_POST['removepeluangitem'])){
            //proses simpan dilakukan
            $this->peluangkerja_model->remove_data($_POST);
        }
    }

    public function addLulusanItem() {
        if(isset($_POST['addlulusanitem'])){
            //proses simpan dilakukan
            $this->profillulusan_model->add_data($_POST);
        }
    }

    public function updateLulusanItem() {
        if(isset($_POST['updatelulusanitem'])){
            //proses simpan dilakukan
            $this->profillulusan_model->update_data($_POST);
        }
    }

    public function removeLulusanItem() {
        if(isset($_POST['removelulusanitem'])){
            //proses simpan dilakukan
            $this->profillulusan_model->remove_data($_POST);
        }
    }
}
