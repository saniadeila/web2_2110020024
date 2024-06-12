<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello Perkenalkan saya Sania Deila Puspita";
    }

    public function hello_2110020024()
    {
        $this->load->model('hello_model');
        $date = $this->hello_model->hello_2110020024();
        echo $date;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');
        $date['mvc'] = $this->hello_model->hello_mvc();
        $date['nama'] = 'Sania Deila Puspita';
        $date['npm'] = '2110020024';
        $this->load->view('hello_view', $date);
    }
}
