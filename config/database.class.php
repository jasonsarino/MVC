<?php 

DEFINE('hostname',        'localhost'); 
DEFINE('username',        'root'); 
DEFINE('password',        ''); 
DEFINE('dbname',          'look_boats_admin'); 

class Database{ 
     
    public $db; 
     
    function __construct(){ 
        try{ 
            $this->db = new Mysqli(hostname, username, password, dbname) or die("".mysqli_error()); 
            return $this->db; 
        }catch(exceptions $e){ 
            return $e; 
        } 
    } 
     
}