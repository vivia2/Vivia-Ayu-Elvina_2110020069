<?php
defined('BASEPATH') or exit('No direct scrip access allowed');

class Hello extends CI_Controller
{

    public function index()
    {
        echo "Hello Perkenalkan Saya Vivia Ayu Elvina";
    }
    public function hello_2110020069()
    {
        $this->load->model('hello_model');
        $data = $this->hello_model->hello_nim();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');

        $data['mvc'] = $this->hello_model->hello_mvc();

        $this->load->view('hello_view', $data);
    }
}
