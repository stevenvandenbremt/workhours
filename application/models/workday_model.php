<?php

class Workday_model extends MY_Model{
	
	//public $belongs_to = array( 'user' );
    public $has_many = array( 'batchtimes' );

	function __construct(){
		parent:: __construct();
	}



	/**
		$id
		$workday_date
		$created_at
		$updated_at
	*/

}


