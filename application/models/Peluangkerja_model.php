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
}