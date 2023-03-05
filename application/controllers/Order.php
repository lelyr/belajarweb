<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){

        parent:: __construct();
        
        $this->load->library('session');
        if (empty($this->session->userdata('Username'))) {
            redirect('user/login');
        }

        $this->load->model(array('product_model'));
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library('form_validation');
    }

	public function index()
	{

    $product = $this->product_model->getData();

    $data = array(
      'title' => 'Product',
      'page' => 'pages/order/index',
      'product' => $product
    );

		$this->load->view('theme/index', $data);
	}

  public function confirmOrder()
  {
    $id = $this->input->post('ProductID');
		$data = $this->product_model->getProductById($id);

    echo json_encode($data);
  }

  public function newOrder() {

    // $format = "%Y-%m-%d %h:%m:%s";

    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
    $CreatedAt     = $date->format('Y-m-d H:i:s');
    $id = $this->input->post('ProductID');

		$data = array(
      'ProductID' => $id,
      'UserID' => 1,
      'CreatedAt' => $CreatedAt,
      'Status' => 0,
    );
    if ($this->product_model->insertOrder($data)) {
      redirect('History/index');
    }
	}
}
