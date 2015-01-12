<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workhours extends CI_Controller {

	function __construct(){
		parent:: __construct();
		session_start();
		$this->load->model('example_model');
	}


	public function index()
	{
		$data['content'] = "/workhours/index";
      	$this->load->view('shared/_Layout', $data);
	}

	public function new_entry(){

	}
}

/* End of file example.php */
