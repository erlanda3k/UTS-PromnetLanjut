<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_daftarkegiatan extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tbl_data_kegiatan')
                 ->order_by('id_kegiatan', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tbl_data_kegiatan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_kegiatan)
    {

        $query = $this->db->where("id_kegiatan", $id_kegiatan)
                ->get("tbl_data_kegiatan");

        if($query){
            return $query->row();
        }else{
            return false; 
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tbl_data_kegiatan", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tbl_data_kegiatan", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}