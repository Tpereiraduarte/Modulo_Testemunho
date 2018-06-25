te<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormularioComponent{

    private $nome;
    private $titulo;
    private $data;
    private $conteudo;
    private $imagem;

    function __construct($nome,$titulo,$conteudo){
        $this->nome = $nome;        
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
    }


    }
    public function getHTML(){
        return '<div class="file-field">
        <div class="mb-4">
        <img src="https://image.freepik.com/icones-gratis/user-silhueta-masculina_318-55563.jpg" class="rounded-circle z-depth-1-half avatar-pic">
        </div>

        <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="nome_testemunho" value="'.$this->nome.'" class="form-control">
        <label for="materialFormRegisterNameEx">Digite seu nome</label>
        </div>
        <div class="md-form">
        <i class="fa fa-tag prefix grey-text"></i>
        <input type="text" name="titulo_testemunho" value="'.$this->titulo.'" class="form-control">
        <label for="materialFormRegisterNameEx">titulo</label>
        </div>
        <div class="md-form">
        <i class="fa fa-calendar prefix grey-text"></i>
        <br>
        <input type="date" name="data_testemunho" value="'.$this->data.'" class="form-control">
        <label for="materialFormRegisterNameEx">Data</label>
        </div>
        <div class="md-form">
        <i class="fa fa-pencil prefix grey-text"></i>
        <textarea class="form-control rounded-0" name="conteudo_testemunho" value="'.$this->conteudo.' rows="10"></textarea>
        </div>
        <div class="d-flex justify-content-center">
        <div class="btn btn-primary float-right">
        <span>Escolha uma foto</span>
        <input type="file"name="imagem_testemunho" value="'.$this->imagem.' ">
        </div>            
        </div>
        </div>
        <div class="text-center mt-4">
        <button class="btn btn-primary" type="submit">Enviar</button>
        </div>';
    }

}