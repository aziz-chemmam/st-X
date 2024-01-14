<?php 
class Admin extends Controller {

    public function __construct(){

    }
   
 

   public function admin(){
    $securityService = new SecurityServiceImp();
    $securityService->checkForAdmin();  
    // var_dump($_SESSION["roleName"]);
    $this->view('admin/admin');

   }

  



   public function categories(){
   
    if(isset($_POST["addCategory"])){
        $categoryId = uniqid();
        $categoryName = $_POST["categoryName"];
        $categoryDesc = $_POST["categoryDesc"];

        $categoryToAdd = new Category();
        $categoryToAdd->setCategoryId($categoryId);
        $categoryToAdd->setCategoryName($categoryName);
        $categoryToAdd->setCategoryDesc($categoryDesc);
        
        $categoryService = new CategoryServiceImp();

        try{
            $categoryService->addCategory($categoryToAdd);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
        $this->view('admin/categories');
   }

     public function displayCategory(){
    $categoryService = new CategoryServiceImp();
    try{
        $categories = $categoryService->displayCategory();
        echo json_encode($categories);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
}



   public function wikis(){
    $this->view('admin/wikis');
   }





   public function tags(){
    if(isset($_POST["addTag"])){
    $tagId = uniqid();
    $tagName = $_POST["tagName"];
    
    $tagToAdd = new Tag();
    $tagToAdd->setTagId($tagId);
    $tagToAdd->setTagName($tagName);
    
    $tagService = new tagServiceImp();

        try {
            $tagService->addTag($tagToAdd);
        }catch(PDOException $e){
            die($e->getMessage());
         }
    }
    $this->view('admin/tags');
   }




   public function user(){
    if(isset($_POST["addUser"])){
    $userId = uniqid();
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $email = $_POST['email'];

    $userToAdd = new AppUser();
    $userToAdd->setUserId($userId);
    $userToAdd->setUsername($username);
    $userToAdd->setPw($pw);
    $userToAdd->setEmail($email);

    $role = new Role();
    $role->setRoleName("admin");

    $roleOfUser = new RoleOfUser();
    $roleOfUser->setUser($userToAdd);
    $roleOfUser->setRole($role);
    $userService = new UserServiceImp();
    $roleOfUserService = new RoleOfUserServicesImp();
    
    try {
        $userService->addUser($userToAdd);
        $roleOfUserService->addRoleOfUser($roleOfUser);
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
$this->view('admin/user');
}

public function displayUsers(){
    $userService = new UserServiceImp();
    try{
        $users = $userService->displayUsers();
        echo json_encode($users);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
}



   
}




?>