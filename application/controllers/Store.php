<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Store',
            'page' => 'pages/store/index'
        );

        $this->load->view('theme/index', $data);
    }
}
