<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Testemunho extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('TestemunhoModel', 'teste');
        $this->menu_itens = $this->teste->get_menu_itens();
    }

    /**
     * Página inicial do módulo; exibe sua funcionalidade principal. Além desta, um
     * módulo pode ter outras páginas, de acordo com sua finalidade. O importante é
     * lembrar que um módulo deve estar focado em fazer, bem feito e de forma flexível, 
     * apenas uma tarefa.
     */
    public function index(){

        $html = $this->load->view('pagina_testemunho', null, true);
        $this->show($html);
    }

    public function page1_name(){
        $this->add_script('poll'); //Add arquivo css 
        $this->add_style('style'); //Add arquivo css 
        $html = $this->load->view('registro_depoimento', null, true);
        $this->show($html);
        $this->load->model('CadastroModel', 'model');
        $this->load->model->gravar();
    }

    public function page2_name(){
        $html = $this->load->view('pagina_testemunho', null, true);
        $this->show($html);
    }

    /**
     * Página de configuração do conteúdo exibido nas páginas de funcionalidades do módulo
     */
    public function edit(){
        $html = 'module pages content editor';
        $this->show($html);
    }

}