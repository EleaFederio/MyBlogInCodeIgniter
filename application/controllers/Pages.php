<?php
/**
 * Created by PhpStorm.
 * User: eleazarx
 * Date: 7/3/18
 * Time: 10:37 AM
 */

class Pages extends CI_Controller
{
    function view($page = 'home'){
      if($this->session->userdata('username') == ""){
        redirect(base_url().'authentication');
      }
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
          show_404();
      }
      $data['title'] = ucfirst($page);
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
    }

    function logout(){
      $this->session->unset_userdata('username');
      redirect(base_url().'authentication');
    }
}
