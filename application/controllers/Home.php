<?php

class Home extends CI_Controller {
    public function index($name = "Hanas Bayu Pratama")
    {
        // echo 'home / index';
        $data['head'] = 'Halaman Home';
        $data['name'] = $name;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}