<?php
/**
 * Created by PhpStorm.
 * User: eleazarx
 * Date: 7/3/18
 * Time: 11:32 AM
 */

class Notes_model extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    function getNotes($id = FALSE){
        if($id === FALSE){
            $this->db->order_by('mynotes_id', 'DESC');
            $query = $this->db->get('mynotes');
            return $query->result_array();
        }
        $query = $this->db->get_where('mynotes', array('mynotes_id' => $id) );
        return $query->row_array();
    }

    function create_blog(){
      $data = array(
        'title' => $this->input->post('title'),
        'body' => $this->input->post('body')
      );
      $this->db->set('createDate', 'NOW()', FALSE);
      return $this->db->insert('mynotes', $data);
    }

    function delete_blog($id){
      $this->db->where('mynotes_id', $id);
      return $this->db->delete('mynotes');
    }

    function updateBlog($id){
      $this->db->where('mynotes_id', $id);
      $data = array(
        'title' => $this->input->post('title'),
        'body' => $this->input->post('body')
      );
      $this->db->set('createDate', 'NOW()', FALSE);
      return $this->db->update('mynotes',$data);
    }
}
