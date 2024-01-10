<?php

class AppUser {
    private $userId ;
    private $username ;
    private $password ;
    private $email ;
    private $userImg ;
    private $created_at;




     public function __construct(){

    }
      public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getUserImg() {
        return $this->userImg;
    }

    public function setUserImg($userImg) {
        $this->userImg = $userImg;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }
}


?>