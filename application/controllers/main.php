<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    public function index(){
        $this->load->view('vw_login');
    }
    
    public function loginValidation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome','Login','required|trim|callback_validate_credentials');
	$this->form_validation->set_rules('password','Senha', 'required|md5|trim');

	if($this->form_validation->run()){
            $usuario= array(
            'nome'=> $this->input->post('nome'),
            'is_logged_in' => 1
            );
            $this->session->set_userdata($usuario);
            redirect('main/members');
	}else{
            $this->load->view('vw_login');
	}
    }
    
    public function logout(){
        $this->session->sess_destroy();
    }
}