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

        public function home() {
         
            $this->view('pages/home' );
        }

        public function categories() {
         
            $this->view('pages/categories' );
        }

        public function dashboard() {
         
            $this->view('pages/dashboard' );
        }

        public function wikis() {
         
            $this->view('pages/wikis' );
        }

        public function tags() {
         
            $this->view('pages/tags' );
        }




        public function regestration(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
             $userId = uniqid();
             $username = $_POST['username'];
             $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
             $email = $_POST['email'];
 
             $userToAdd = new AppUser();
             $userToAdd->setUserId($userId);
             $userToAdd->setUsername($username);
             $userToAdd->setpassword($password);
             $userToAdd->setEmail($email);
 
 
             $roleOfUser = new RoleOfUser();
             $roleOfUser->setUserId($userToAdd);
             $userServices = new UserService();
             $roleOfUserService = new RoleOfUserServicesImp();
             
 
             try{
                 $userServices->regestration($userToAdd);
                 $roleOfUserService->addRoleOfUser($roleOfUser); 
                 header("Location:". URLROOT ."/pages/login"); 
             }catch(PDOException $e){
                 die($e->getMessage());
             }
 
            }
             $this->view('pages/registration');
         }
    }