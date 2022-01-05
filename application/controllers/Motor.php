<?php

class Motor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Motor_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Motor';
        $data['motor'] = $this->Motor_model->getAllMotor();
        // if( $this->input->post('keyword') ) {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('motor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Motor';

        $this->form_validation->set_rules('nama_motor', 'Nama_motor', 'required');
        // $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('motor/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Motor_model->tambahDataMotor();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('motor');
        }
    }

    public function hapus($id)
    {
        $this->Motor_model->hapusDataMotor($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('motor');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Motor';
        $data['motor'] = $this->Motor_model->getMotorById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('motor/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Motor';
        $data['motor'] = $this->Motor_model->getMotorById($id);
        
        $this->form_validation->set_rules('nama_motor', 'Nama_motor', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('motor/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Motor_model->ubahDataMotor();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('motor');
        }
    }

}
