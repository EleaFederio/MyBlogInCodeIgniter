<?php
/**
 * Created by PhpStorm.
 * User: eleazarx
 * Date: 7/3/18
 * Time: 10:37 AM
 */

class Blog extends CI_Controller
{
    function index(){
        $this->valid_user();
        $data['title'] = 'Blog';
        $this->load->model('notes_model');
        $data['fetched_notes'] = $this->notes_model->getNotes();
        $this->load->view('templates/header');
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    function view($id = NULL){
        $this->load->model('notes_model');
        $data['post'] = $this->notes_model->getNotes($id);
        if(empty($data['post'])){
            show_404();
        }
        $this->load->view('templates/header');
        $this->load->view('blog/view', $data);
        $this->load->view('templates/footer');
    }

    function create(){
      $data['title'] = 'Create';
      $this->load->model('notes_model');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');
      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('blog/create', $data);
        $this->load->view('templates/footer');
      }else {
        $this->notes_model->create_blog();
        redirect('blog');
      }
    }

    function delete($id){
      $this->load->model('notes_model');
      $this->notes_model->delete_blog($id);
      redirect('blog');
    }

    function edit($id){
      $this->load->model('notes_model');
      $data['post'] = $this->notes_model->getNotes($id);
      if(empty($data['post'])){
          show_404();
      }
      $this->load->view('templates/header');
      $this->load->view('blog/edit', $data);
      $this->load->view('templates/footer');
    }

    function update($id){
      $this->load->model('notes_model');
      $data['post'] = $this->notes_model->updateBlog($id);
      redirect('blog');
    }

    function valid_user(){
      if($this->session->userdata('username') == ""){
        redirect(base_url().'authentication');
      }
    }
}
