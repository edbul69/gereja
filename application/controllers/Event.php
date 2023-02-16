<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/auth_header');
        $this->load->view('event/Event_view');
        $this->load->view('templates/auth_footer');
	}
}
