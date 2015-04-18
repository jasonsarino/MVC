<?php
 
require_once URL.'config/database.class.php';


class Model extends Database{
         
    protected $model;
 
    public function __construct(){
        $this->model = new Model();
    }
    
    
    
}