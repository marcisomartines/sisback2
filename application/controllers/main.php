<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    public function index(){
        $this->load->view('vw_login');
    }
    
    public function loginValidation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome','Login','required|trim|callback_validarLogin');
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
    
    public function validarLogin(){
            $this->load->model('md_usuario');

	if($this->model_users->permissaoLogin()){
            return true;
	} else{
            $this->form_validation->set_message('validarLogin','Usuario/Senha incorretos');
            return false;
	}
    }
    
    public function logout(){
        $this->session->sess_destroy();
    }
}