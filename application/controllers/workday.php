<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workday extends CI_Controller {

	function __construct(){
		parent:: __construct();
		session_start();
		$this->load->model('workday_model');
	}


/*

public function appointmentOverview()
    {
       
        $this->load->library('table');
        $this->load->library('pagination');
        $config = array();
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = "<li>";
        $config['num_tag_close'] = "</li>";
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tag_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tag_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tag_close'] = "</li>";
        $config['base_url'] = base_url('/admin/appointmentOverview/');
        $config['total_rows'] = $this->admin_model->record_count('tto_calappointment');
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;


        $this->load->model('admin_model');
        $data['appointments'] = $this->admin_model->getAppointments($config['per_page'], $page);
        $data['paginationLinks'] = $this->pagination->create_links();

        $data['content'] = "/admin/appointmentOverview";
        $this->load->view('/shared/_Layout', $data);
    }

*/



	public function index()
	{


		/*$this->load->library('table');
        $this->load->library('pagination');
        $config = array();
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = "<li>";
        $config['num_tag_close'] = "</li>";
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tag_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tag_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tag_close'] = "</li>";
        $config['base_url'] = base_url('/admin/appointmentOverview/');
        $config['total_rows'] = $this->admin_model->record_count('tto_calappointment');
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;


        $this->load->model('admin_model');
        $data['appointments'] = $this->admin_model->getAppointments($config['per_page'], $page);
        $data['paginationLinks'] = $this->pagination->create_links();*/

		$data['result'] = $this->workday_model->get_all();
		$data['content'] = "/workday/index";
      	$this->load->view('shared/_Layout', $data);
	}

	public function create(){
		
		$data['content'] = "/workday/create";
		$this->load->view('shared/_Layout', $data);
	}

	public function delete($id){
		
		$data['content'] = "/workday/create";
		$this->load->view('shared/_Layout', $data);
	}
}

/* End of file example.php */
