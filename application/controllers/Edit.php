<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

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
            
            extract($_GET);
            
            if($user_id!=NULL)
            {
                //get data from table user to display
                $data['fields']=array(
                    'id',
                    'name',
                );
                $data['conditions'] = array(
                    'del_flag'=>0, //means it is not deleted
                    'id'=>$user_id,
                );

                $data['results'] = $this->Mod_user->get_one_user($data);
                
                $this->load->view('templates/pageheader');
                $this->load->view('Edit/index', $data);
                $this->load->view('templates/pagefooter');
            }
	}
}
