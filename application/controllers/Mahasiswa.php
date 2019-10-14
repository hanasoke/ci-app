<?php 

class Mahasiswa extends CI_Controller {

    // jika hanya untuk load database hanya pada 1 controller, maka lakukan cara dibawah
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    
    public function index()
    {
        $data['head'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}