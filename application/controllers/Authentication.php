<?php
class Authentication extends CI_Controller{

  function index(){
    $this->load->view('templates/header');
    $this->load->view('authentication/login');
    $this->load->view('templates/footer');
  }

  function register(){
    $this->load->model('users_model');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $confirm_password = $this->input->post('confirm_password');
    if($password == $confirm_password){
      if ($email == NULL || $password == NULL) {
        $data = array("pass_combi_error" => "");
        $this->load->view('templates/header');
        $this->load->view('authentication/register', $data);
        $this->load->view('templates/footer');
      }else {
        $this->users_model->user_signup();
        redirect('blog');
      }
    }else {
      $data = array("pass_combi_error" => "Password and Comfirm Password doesn\'t match!");
      $this->load->view('templates/header');
      $this->load->view('authentication/register', $data);
      $this->load->view('templates/footer');
    }
  }

  public function login(){
    $this->load->model('users_model');
    $username = $this->input->post('email');
    $password = $this->input->post('password');
    if($this->users_model->user_signin($username, $password)){
      $session_data = array(
        'username' => $username
      );
      $this->session->set_userdata($session_data);
      redirect('blog');
    }

    // $data['userinfo'] = $this->users_model->get_user();
    // echo "<pre>";
    //   print_r($userinfo);
    // echo "</pre>";
  }

}
 ?>
