<?php 

interface UserService {
    public function addUser(AppUser $user);
    public function displayUsers();
    public function updateUser(AppUser $user);
}

?>