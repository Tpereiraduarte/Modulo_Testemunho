<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class TestemunhoTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('testemunho');
    }

    function get_fields(){
        $fields['nome_testemunho'] = array('type' => 'VARCHAR', 'constraint' =>  50);
        $fields['titulo_testemunho'] = array('type' => 'VARCHAR', 'constraint' =>  150);
        $fields['data_testemunho'] = array('type' => 'DATE');
        $fields['conteudo_testemunho'] = array('type' => 'VARCHAR', 'constraint' =>  500);
        $fields['imagem_testemunho'] = array('type' => 'VARCHAR', 'constraint' =>  250);

        return $fields;
    }

    function get_data(){
        // para inserir um registro na tabela testemunho...
        $data[] = array(
            'nome_testemunho'=>'Thiago',
            'titulo_testemunho' => 'Felicidade', 
            'data_testemunho'=>'2018-06-24',
            'conteudo_testemunho' => 'descrição que compõe o testemunho',
            'imagem_testemunho' => 'https://static.tumblr.com/25191a14ce137af97c70d722f680008b/2zybhkf/1Pmnhs66y/tumblr_static_tumblr_static__640.jpg'
        );

        return $data;
    }

}