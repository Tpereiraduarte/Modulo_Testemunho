<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'EvalStrategy.php';

class CardTestemunho extends CI_Object{

    private $id;
    private $nome;
    private $titulo;
    private $data_test;
    private $conteudo;
    private $imagem;



   public function __construct($data, EvalStrategy $eval){
      $this->id = $data->id;   
      $this->nome = $data->nome;   
      $this->titulo = $data->titulo;
      $this->data_test = $data->data_test;
      $this->conteudo = $data->conteudo;
      $this->imagem = $data->imagem;
      $this->eval_strategy = $eval;
   }

   public function getHTML(){
      return '
      <div class="row">
	    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

	      <div class="card testimonial-card">

	        <div class="card-up info-color"></div>

	        <div class="avatar mx-auto white">
	          <img src="'.$imagem.'">
	        </div>
	        <div class="card-body">

	          <h4 class="font-weight-bold mb-4">'.$nome.'</h4>
	          <hr>

	          <p class="dark-grey-text mt-4"><i class="fa fa-quote-left pr-2"></i>'.$conteudo.'.</p>
	        </div>
      </div>

    </div>
    </div>
   }
}