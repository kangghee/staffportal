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

                $this->load->view('templates/pageheader');
                $this->load->view('Users/index', $data);
                $this->load->view('templates/pagefooter');
            }
            else
            {
                $this->load->view('templates/pageheader');
                $this->load->view('Register/index');
                $this->load->view('templates/pagefooter');
            }
	}
}
