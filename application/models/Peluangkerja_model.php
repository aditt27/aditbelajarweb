<?php
/**
 * Created by PhpStorm.
 * User: AdityaBudi
 * Date: 20/03/2018
 * Time: 17:38
 */

class Peluangkerja_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_data()
    {
        $query = $this->db->get('peluangkerja');
        return $query->result_array();
    }

    public function add_data($newitem) {
        $peluangkerja = $this->db->escape($newitem['newpeluangitem']);
        $sql = $this->db->query("INSERT INTO peluangkerja (peluangkerja) VALUES ($peluangkerja)");
        if($sql) {
            redirect('admin');
        }
        else {
            echo 'error add peluang kerja item';
        }
    }

    public function update_data($updateitem) {
        $peluangkerja = $this->db->escape($updateitem['updatepeluangitems']);
        $id = $this->db->escape($updateitem['updatepeluangitemId']);
        $sql = $this->db->query("UPDATE peluangkerja SET peluangkerja = $peluangkerja WHERE id = $id");
        if($sql) {
            redirect('admin');
        }
        else {
            echo 'error update peluang kerja item';
        }
    }

    public function remove_data($removeitem) {
        $id = $this->db->escape($removeitem['removepeluangitemId']);
        $sql = $this->db->query("DELETE FROM peluangkerja WHERE id = $id");
        if($sql) {
            redirect('admin');
        }
        else {
            echo 'error remove peluang kerja item';
        }
    }
}