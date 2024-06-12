<?php
defined('BASEPATH') or exit('No direct scrip access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['prodi'] = $this->Prodi_model->lihatData();
        // echo '<pre>';
        // var_dump($data);
        // echo'<pre>';
        $this->load->view('prodi_view', $data);
    }
    
    public function tambah()
    {
        $this->load->view('prodi_tambah');
    }
    public function simpan()
    {
        $data = [
            'id_prodi' => $this->input->post('id_prodi'),
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];
        $this->Prodi_model->simpan($data);
        redirect('prodi');
    }

    public function edit($id)
    {
        $data['prodi'] = $this->Prodi_model->getByid($id);
        $this->load->view('prodi_edit', $data);
    }
    public function perbaharui($id)
    {
        $data = [
            'id_prodi' => $this->input->post('id_prodi'),
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];
        // var_dump($data);
        $this->Prodi_model->perbaharui($id, $data);
        redirect('prodi');
    }

    public function hapus($id)
    {
        $this->Prodi_model->hapus($id);
        redirect('prodi');
    }
}