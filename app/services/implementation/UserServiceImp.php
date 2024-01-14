<?php 
class UserServiceImp implements UserService {
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function addUser(AppUser $user){
        $userToAddQuery = "INSERT INTO appUser (userId, username, pw, email, userImg, created_at) VALUES (:userId, :username, :pw, :email, :userImg, NOW())";
        $this->db->query($userToAddQuery);
        $this->db->bind(":userId", $user->getUserId());
        $this->db->bind(":username", $user->getUsername());
        $this->db->bind(":pw", $user->getPw());
        $this->db->bind(":email", $user->getEmail());
        $this->db->bind(":userImg","téléchargement.jpg");

        try {
            $this->db->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function displayUsers(){
        $displayUserQuery = "SELECT * FROM appUser";
        $this->db->query($displayUserQuery);

        try {
           return $this->db->fetchMultipleRows();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function updateUser(AppUser $user){

    }
    public function deleteUser($userId){


    }
}


?>