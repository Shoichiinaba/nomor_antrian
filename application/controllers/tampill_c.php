<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampill_c extends CI_Controller {

var $template='templatead/index';
function __construct(){
       parent::__construct();
       $this->load->model('list_m');
     } 
	public function index()
	{
		$pencarian=$this->input->post('pencarian');
        $offset=$this->uri->segment(2,0);
        $total=4;
        $result=$this->list_m->getpetugas($pencarian,$offset,$total);
        $config['uri_segment']='2';
        $config['base_url']=site_url('tampil_c');
        $config['per_page']=$total;
        $config['total_rows']=$result['total_rows'];
        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        $data['tampil_c']=$result['data'];
        $data['offset']=$offset;

		$data['content'] = 'list/tampil';
        $this->load->view($this->template, $data);
		
	}
}
