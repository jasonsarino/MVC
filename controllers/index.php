<?php
class Index extends Controller{
 
    public function __construct(){
        parent::__construct();

    }
 
    public function index(){
        $this->view->load('index/index');
    }
    
    




}