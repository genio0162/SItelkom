<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Block extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function blocked()
    {
        $this->load->view('template/header');
        $this->load->view('block/v_block');
    }
}
