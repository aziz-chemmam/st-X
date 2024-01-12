<?php 
interface SecurityService {
    public function register(AppUser $user);
    public function login(AppUser $user);
     public function checkForRole($userId);
    public function checkForAdmin();
     public function checkForAuthor();
}

?>