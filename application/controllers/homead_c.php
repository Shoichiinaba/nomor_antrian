<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homead_c extends CI_Controller {

var $template='templatead/index';

	public function index()
	{


		$data['content'] = 'admin/homead';
        $this->load->view($this->template, $data);
		
	}


}
