<?php

class Model_kategori extends CI_Model{
    public function data_album_kpop(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Album'));
    }
    public function data_lightsticks(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Lightsticks'));
    }
    public function data_accessories(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Accessories'));
    }
    public function data_photocard(){
        return $this->db->get_where("tb_barang",array('kategori' => 'Photocard'));
    }
}