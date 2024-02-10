<?php
class User extends CI_controller{
     function index(){
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users']= $users;
        $this->load->view('list',$data);

    }


    function create(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == false){
            $this->load->view('create');
        }else{
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','recoard added successfully');
            redirect(base_url().'index.php/user/index');





        }

        
        
    }
}





?>