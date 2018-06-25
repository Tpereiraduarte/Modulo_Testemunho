<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RunModel extends MY_Model{

    public function __construct(){
        parent::__construct('Testemunho');
        $this->builder_list[] = 'ConfigTableBuilder';
        $this->builder_list[] = 'MenuTableBuilder';

        $this->builder_list[] = 'TestemunhoTableBuilder';
    }
    	public function gravar(){
    		$data = array(
                      'nome_testemunho'    => $this->input->post('nome_testemunho'),
                      'titulo_testemunho'  => $this->input->post('titulo_testemunho'),
                      'data_testemunho'    => $this->input->post('data_testemunho'),
                      'conteudo_testemunho'=> $this->input->post('conteudo_testemunho')
                  );
     $this->db->insert('testemunho', $data);
    }

}

