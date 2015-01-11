<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct(){
		parent:: __construct();
		session_start();
		$this->load->model('example_model');
	}


	public function index()
	{
		$data['content'] = "/example/index";
      	$this->load->view('shared/_Layout', $data);
	}

	public function get_data(){
		$data['alertMode'] = "info";
		$data['alertMessage'] = "This is an alert message of type info";
		$data['mydata'] = $this->example_model->get_data();
		$data['content'] = "/example/index";
		$this->load->view('shared/_Layout', $data);
	}
}

/* End of file example.php */
