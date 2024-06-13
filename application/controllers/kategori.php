<?php

class Kategori extends CI_Controller{
    public function album_kpop()
    {
        $data['album_kpop'] = $this->model_kategori->data_album_kpop()->result ();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('album_kpop',$data);
        $this->load->view('templates/footer');
    }
    public function lightsticks()
    {
        $data['lightstick'] = $this->model_kategori->data_lightsticks()->result ();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('lightsticks',$data);
        $this->load->view('templates/footer');
    }
    public function accessories()
    {
        $data['accessories'] = $this->model_kategori->data_accessories()->result ();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('accessories',$data);
        $this->load->view('templates/footer');
    }
    public function photocard()
    {
        $data['photocard'] = $this->model_kategori->data_photocard()->result ();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('photocard',$data);
        $this->load->view('templates/footer');
    }
}