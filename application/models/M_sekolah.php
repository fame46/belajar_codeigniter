<?php
class M_sekolah extends CI_Model
{
    public function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }
}
