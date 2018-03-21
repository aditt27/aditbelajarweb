<?php
/**
 * Created by PhpStorm.
 * User: AdityaBudi
 * Date: 20/03/2018
 * Time: 17:38
 */

class Profillulusan_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_data()
    {
        $query = $this->db->get('profillulusan');
        return $query->result_array();
    }

    public function add_data($newitem) {
        $profillulusan = $this->db->escape($newitem['newlulusanitem']);
        $sql = $this->db->query("INSERT INTO profillulusan (lulusan) VALUES ($profillulusan)");
        if($sql) {
            redirect('admin');
        }
        else {
            echo 'error add profil lulusan item';
        }
    }

    public function update_data($updateitem) {
        $profillulusan = $this->db->escape($updateitem['updatelulusanitems']);
        $id = $this->db->escape($updateitem['updatelulusanitemId']);
        $sql = $this->db->query("UPDATE profillulusan SET lulusan = $profillulusan WHERE id = $id");
        if($sql) {
            redirect('admin');
        }
        else {
            echo 'error update profil lulusan item';
        }
    }

    public function remove_data($removeitem) {
        $id = $this->db->escape($removeitem['removelulusanitemId']);
        $sql = $this->db->query("DELETE FROM profillulusan WHERE id = $id");
        if($sql) {
            redirect('admin');
        }
        else {
            echo 'error update profil lulusan item';
        }
    }
}