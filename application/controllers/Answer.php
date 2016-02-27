<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Answer extends MY_Controller {

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
//        $this->load->library('parser');
    }
    
    public function form(){
        
    }
    
    public function add(){
        
    }
    
    public function result(){
	var_dump($_POST);
$this->smarty->assign('lon', 'hoge'); 
$this->smarty->assign('lat', 'piyo'); 
$this->smarty->assign('dist', 'hogepiyo'); 
        $this->view('answer/result');
    }
    
}
