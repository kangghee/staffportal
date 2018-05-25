<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model(array('Mod_user'));
        }
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            $user_id=NULL;
            $user_name=NULL;
            $submit=NULL;
            
            extract($_POST);
            
            $params['user_id'] = $user_id;
            $params['user_name'] = $user_name;
            
            if(isset($submit))
            {
                //var_dump($user_name); die;
                $this->Mod_user->update($params);
		$this->load->view('welcome_message');
            }
           
            $this->load->view('Register/index');
	}
}
