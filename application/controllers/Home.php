<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/auth_header');
        $this->load->view('home/Home_view');
        $this->load->view('templates/auth_footer');
	}
}
