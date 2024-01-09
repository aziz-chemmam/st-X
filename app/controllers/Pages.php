<?php

    class Pages extends Controller{
        public $userModel;
        public function __construct()
        {

        }
        public function index() {

            $data = [
                'title' => 'You Welcomee to Our Website',

            ];

            
            $this->view('pages/index' , $data );
        }
        public function about() {
            $data = [
                'title' => 'About us' 
            ];
            $this->view('pages/about' , $data);
        }

        public function login() {
         
            $this->view('pages/login' );
        }

        public function registration() {
         
            $this->view('pages/registration' );
        }
    }