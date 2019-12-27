<?php

class ModelMhs extends CI_Model{
    
    private $table = "mahasiswa";
    private $pk = "nim";
    
    public function get(){
        return $this->db->get($this->table);
    }
    
    public function insert($data){
        return $this->db->insert($this->table, $data);
    }
    
}
