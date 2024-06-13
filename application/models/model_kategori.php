<?php

class Model_kategori extends CI_Model{
    public function data_album_kpop(){
        return $this->db->get_where("tb_barang",array('kategori' => 'album kpop'));
    }
    public function data_lightsticks(){
        return $this->db->get_where("tb_barang",array('kategori' => 'lightsticks'));
    }
    public function data_accessories(){
        return $this->db->get_where("tb_barang",array('kategori' => 'accessories'));
    }
    public function data_photocard(){
        return $this->db->get_where("tb_barang",array('kategori' => 'photocard'));
    }
}