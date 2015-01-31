<?php

class Batchtime_model extends MY_Model{
	
	public $belongs_to = array( 'workday' );

	function __construct(){
		parent:: __construct();
	}



	/**
		$id
		$batchtime
	*/

}


