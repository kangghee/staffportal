<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

        public function __construct() {
            parent::__construct();
        }
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            $this->load->view('templates/pageheader');
            $this->load->view('welcome_message');
            $this->load->view('templates/pagefooter');
	}
}
