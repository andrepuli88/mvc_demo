<?php

class Controller {

	function __construct() {
		//echo 'Main controller<br />';
		$this->view = new View();
	}

        public function loadModel($name){
                
            $name = 'models/'.$name.'_model.php';
            // OK 
            if(file_exists($path)) {
                require 'models/'.$name.'_model.php';
                
                $modelName = $name . '_Model';
                $this->model = new $modelName();
            }
        }
        
}