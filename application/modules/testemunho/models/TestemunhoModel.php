<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TestemunhoModel extends MY_Model{

	public function get_testemunho(){
		$data = new TestemunhoData(1);
		$test = new TestemunhoComponent($data);
		return $test->geHTML();
	}

 public function registro_testemunho(){ //Página de registro do testemunho,  quando o post vazio carrega form vazio
        if(! sizeof($_POST)) {
            if(! $this->modconfig->mod_poll_usa_inscricao)//Acessando o valor que está no banco de dados(modconfig)essa mesma classe faz o get e o set 
                redirect('testemunho/index');
            return;
        }

        //todo envio tem que ser validado
        $this->form_validation->set_rules('nome_testemunho', 'Nome_testemunho', 'required|min_length[5]');

        if($this->form_validation->run()){
            $this->load->library('User');// carrega um library  que grava os dados do usuário
            $data = $this->input->post();
            $user = $this->user->register($data);

            $this->session->user = $user;
            redirect('testemunho/index');
        }
    }
}