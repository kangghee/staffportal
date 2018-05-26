<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_user extends CI_Model {

    protected $table='user';
    
    public function add($params)
    {
        $fields=array(
            'name'=> $params['user_name']
        );
        
        //insert table
        $fields['created_date']=date('Y-m-d H:i:s');
        $this->db->insert($this->table, $fields);
    }
    
    public function update($params)
    {
        $fields=array(
            'name'=> $params['user_name']
        );
        
        //check if data exists
        $conditions = array(
            'id'=>$params['user_id'],
            'del_flag'=>0
        );
        $query = $this->db->get_where($this->table, $conditions);
        $results = $query->result_array();
        if (!empty($results))
        {
            //update table
            $fields['updated_date']=date('Y-m-d H:i:s');
            $this->db->where($conditions);
            $this->db->update($this->table, $fields);
        }
        else 
        {
            //insert table
            $fields['created_date']=date('Y-m-d H:i:s');
            $this->db->insert($this->table, $fields);
        }
    }
    
    public function get_users($params)
    {
        $this->db->select($params['fields']); //select fields from db table
        $this->db->order_by($params['order']);
        $query = $this->db->get_where($this->table,$params['conditions']);
        
        return $query->result_array();
    }
    
    public function get_one_user($params)
    {
        $this->db->select($params['fields']); //select fields from db table
        $query = $this->db->get_where($this->table,$params['conditions']);
        
        return $query->result_array();
    }
    
    public function delete($params)
    {
        foreach($params as $user_id)
        {
            $fields=array(
                'del_flag'=> 1, //update this field to 1 to mean it is deleted
            );

            //check if data exists
            $conditions = array(
                'id'=>$user_id,
            );
            
            $this->db->where($conditions);
            $this->db->update($this->table, $fields);
        }
    }

    public function delete_permanently($params)
    {
        foreach($params as $user_id)
        {
/*
            $fields=array(
                'del_flag'=> 1, //update this field to 1 to mean it is deleted
            );
*/
            //check if data exists
            $conditions = array(
                'id'=>$user_id,
            );
            
            $this->db->where($conditions);
            $this->db->delete($this->table);
        }
    }
}
