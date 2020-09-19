<?php
    class Welcome extends Controller{
        public function __construct(){
            checkSession();
        }

        public function index(){

        }

        public function dashboard(){
            $data = [
                'title' => 'welcome'
            ];
            $this->view('welcome/dashboard', $data);
        }
    }
?>