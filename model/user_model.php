<?php
class User_model extends Model{
 
    protected $qry;

    public function __construct(){
        parent::__construct();
     
    }
 
    public function getAll(){
        $this->db->query("SELECT * FROM cGroup");
    }
    





}