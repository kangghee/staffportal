<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model(array('Mod_user'));
        }
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            $user_id = NULL;
            
            extract($_GET);
            
            $user_id_array=array('user_id'=>$user_id);
            //var_dump($user_id_array);
            $this->Mod_user->delete($user_id_array);

            $this->load->view('welcome_message');

            //get data from table user to display
            $data['fields']=array(
                'id',
                'name',
                'created_date'
            );
            $data['conditions'] = array(
                'del_flag'=>0 //means it is not deleted
            );
                    
            $data['order'] = 'created_date asc';
            
            //get data from db
            $data['results']=$this->Mod_user->get_users($data);
            
            $this->load->view('Users/index', $data);
	}
}
