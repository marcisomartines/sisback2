<?php

class Md_usuario extends CI_Model{
    public function permissaoLogin(){
		$this->db->where('nome',$this->input->post('nome'));
		$this->db->where('password',md5($this->input->post('password')));
		$query=$this->db->get('tb_users');
		if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}
}

