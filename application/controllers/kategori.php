<?php

class Kategori extends CI_Controller{
    public function album_kpop()
    {
        $data['album_kpop'] = $this->model_kategori->data_album_kpop()->result ();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('album_kpop/,$data');
        $this->load->view('templates/header');
    }
}