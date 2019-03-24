<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_product');
    }

    public function index($index = 0)
    {
        $data['listProduct'] = $this->m_product->findAll();
        $this->load->view('show', $data);
    }
}
?>