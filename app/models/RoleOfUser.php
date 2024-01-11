<?php

class RoleOfUser{
    private AppUser $userId ;
    private Role $roleName ;

    public function __construct(){

    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId(AppUser $userId) {    
        $this->userId = $userId;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setRoleName(Role $roleName) {
        $this->roleName = $roleName;
    }
}

?>