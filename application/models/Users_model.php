<?php
/**
 *
 */
class Users_model extends CI_Model
{

  function __construct(){
      $this->load->database();
  }

  function get_user(){
   $query =  $this->db->get('user');
   return  $query->result_array();
  }

  function user_signup(){
    $data = array(
      'username' => $this->input->post('email'),
      'password' => md5($this->input->post('password'))
    );
    return $this->db->insert('user', $data);
  }

  function user_signin($username, $password){
     $this->db->where('username', $username);
     $password = $this->db->where('password', md5($password));
     $query =  $this->db->get('user');
     if($query->num_rows() > 0) {
       return TRUE;
     } else {
       return FALSE;
     }
  }

}

 ?>
