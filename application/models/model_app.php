<?php
class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //    KODE PENJUALAN
    
    public function getAllData($table)
    {
        return $this->db->get($table);
    }

    public function getAllDataLimited($table,$limit,$offset)
    {
        return $this->db->get($table, $limit, $offset);
    }

    public function getSelectedDataLimited($table,$data,$limit,$offset)
    {
        return $this->db->get_where($table, $data, $limit, $offset);
    }

    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }

    function manualQuery($q)
    {
        return $this->db->query($q);
    }
}