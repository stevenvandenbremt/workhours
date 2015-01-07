<?php

class Example_model extends CI_Model{
	function __construct(){
		parent:: __construct();
	}

	public function get_data(){
		return "this is data from Example_model";
	}
}


