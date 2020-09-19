<?php
    class Home extends Controller {

        public function __construct(){
            
        }

        public function index(){
            $data = [
                'title' => 'OreMVC',
                'description' => 'The lightweight PHP framework for web developers',
            ];
            $this->view('app', $data);
        }
        
    }
?>