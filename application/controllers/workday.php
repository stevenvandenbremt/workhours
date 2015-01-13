<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workday extends CI_Controller {

	function __construct(){
		parent:: __construct();
		session_start();

		$this->load->library('table');
        $this->load->library('pagination');

        $this->load->model('workday_model');

	}

	public function index()
	{

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
        $config['base_url'] = base_url('/workday');
        $config['total_rows'] = $this->workday_model->count_all();
        $config['per_page'] = 5;
        $config['uri_segment'] = 2;

        $this->pagination->initialize($config);

        $page = $this->uri->segment(2,0);


        $data['result'] = $this->workday_model->limit($config['per_page'], $page)->get_all();
        $data['pagination_links'] = $this->pagination->create_links();

		
		$data['content'] = "/workday/index";
      	$this->load->view('shared/_Layout', $data);
	}

	public function create(){
		
		$data['content'] = "/workday/create";
		$this->load->view('shared/_Layout', $data);
	}
    public function add_start_time(){
        redirect('/workday');
    }
    public function add_stop_time(){
        redirect('/workday');
    }

	public function delete($id){
		
		$data['content'] = "/workday/create";
		$this->load->view('shared/_Layout', $data);
	}
}

/* End of file example.php */
