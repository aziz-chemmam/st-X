<?php

    class Category {
        private $categoryId;
        private $categoryName;
        private $categoryDesc;
        private $date;




        public function __construct(){

        }
    
        public function getCategoryId() {
            return $this->categoryId;
        }
    
        public function setCategoryId($categoryId) {
            $this->categoryId = $categoryId;
        }
    
        public function getCategoryName() {
            return $this->categoryName;
        }
    
        public function setCategoryName($categoryName) {
            $this->categoryName = $categoryName;
        }
    
       public function getCategoryDesc() {
            return $this->categoryDesc;
        }
    
        public function setCategoryDesc($categoryDesc) {
            $this->categoryDesc = $categoryDesc;
        }
    
        public function getDate() {
            return $this->date;
        }
    
        public function setDate($date) {
            $this->date = $date;
        }
    }
    


?>