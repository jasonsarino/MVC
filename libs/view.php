<?php
 			
class View{
 			
    public function load($name,$param){


        require BASE_PATH . '/views/header.php';
        require BASE_PATH . '/views/' . $name .'.php';
        require BASE_PATH . '/views/footer.php';


    }
 
}