<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form_c extends CI_Controller {

var $template='template/index';

	public function index()
	{

		$data['content'] = 'form/form_v';
        $this->load->view($this->template, $data);
		
	}


}
