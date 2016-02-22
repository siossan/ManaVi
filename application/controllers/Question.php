<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends MY_Controller {

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
//        $this->load->library('parser');
    }
    
    
    public function questions(){
        
    }
    
    public function form(){
        $this->view('question/form');
    }
    
    public function start(){
        
    }
    
    public function end(){
        
    }
    
    public function add(){
        
    }
}
    