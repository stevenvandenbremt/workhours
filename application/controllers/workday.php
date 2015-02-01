<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workday extends CI_Controller {

	function __construct(){
		parent:: __construct();
		session_start();

		$this->load->library('table');
        $this->load->library('pagination');

        $this->load->model('workday_model', 'workday');
        $this->load->model('batchtime_model', 'batchtime');

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
        $config['total_rows'] = $this->workday->count_all();
        $config['per_page'] = 5;
        $config['uri_segment'] = 2;

        $this->pagination->initialize($config);

        $page = $this->uri->segment(2,0);


        /* little example

        $post = $this->post_model->with('author')
                         ->with('comments')
                         ->get(1);
        */



        $data['result'] = $this->workday->limit($config['per_page'], $page)
                                    ->with('batchtimes')
                                    ->get_all();
        $data['pagination_links'] = $this->pagination->create_links();

		
		$data['content'] = "/workday/index";
      	$this->load->view('shared/_Layout', $data);
	}

	public function create(){
		
		$data['content'] = "/workday/create";
		$this->load->view('shared/_Layout', $data);
	}
    public function add_batchtime(){

        $post_data['passed_date'] = date('Y-m-d' , strtotime($this->input->post('passed_date')));
        $post_data['batchtime'] = date('H:i' , strtotime($this->input->post('batchtime_hour') . ':' . $this->input->post('batchtime_minutes')));

        $count = $this->workday->count_by('workday_date', $post_data['passed_date']);
        if($count == 1){
            
            $row = $this->workday->get_by('workday_date', $post_data['passed_date']);
            $workday_id = $row->id;
            $batchtime_insert_id = $this->batchtime->insert(array('batchtime' => $post_data['batchtime'], 'workday_id' => $workday_id), FALSE);

            $result['toast_message'] = 'date found: ' . $workday_id;

        }else{
            
            $insert_id = $this->workday->insert(array('workday_date' => $post_data['passed_date'], 'user_id'=> 1), FALSE);
            $batchtime_insert_id = $this->batchtime->insert(array('batchtime' => $post_data['batchtime'], 'workday_id' => $insert_id), FALSE);
            $result['toast_message'] = 'batchtime inserted';
        }


        //$result['toast_message'] = "return from add batchtime";
        echo json_encode($result);
    }


    public function add_start_time(){
        $batchtime = $this->post->batchtime_hour . ':' . $this->post->batchtime_minutes;

        $result['batchtime'] = $batchtime;

        echo json_encode($result);
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
