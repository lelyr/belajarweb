<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){

        parent:: __construct();
        
        $this->load->library('session');
        if (empty($this->session->userdata('Username'))) {
            redirect('user/login');
        }

        $this->load->model(array('order_model'));
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library('form_validation');
    }

	public function index() {
        $data = array(
        'title' => 'Order',
        'page' => 'pages/order/index',
        'order' => $this->order_model->getOrder(1)
        );

		$this->load->view('theme/index', $data);
	}

    public function confirm() {
		$OrderID = $this->input->get('id');
		$Status = $this->input->get('Status');
		if ($this->order_model->confirmPayment($OrderID, $Status)) {
			redirect('order/index');
		}
	}
}
