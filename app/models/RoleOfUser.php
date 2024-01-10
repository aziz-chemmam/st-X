<?php

class RoleOfUser{
    private $userId ;
    private Role $roleName ;

    public function __construct(){

    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
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