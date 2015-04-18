<?php
 
class Error extends Controller{
     
    
    public $val = "abc";
    
    
    
       
    public function __construct($error = ""){
        parent::__construct();
        $this->view->errors = array($error);
    }
 
    public function index(){
        $this->data['title'] = "This is title";
        $this->data['header'] = $init->loadModel($val);
        
        $this->view->load('error/index',$this->data);
    }

    public function view(){
    	
        
        $this->view->load('error/view',$this->data);
    }
}