<?php

class Wiki {
    private $wikiId ;
    private $title ;
    private $content ;
    private $wikiImg ;
    private Appuser $userId ;
    private Category $categoryId ;
    private $created_at;

    public function __construct(){

    }

    public function setWikiId($wikiId){
        $this->wikiId = $wikiId;
    }
    public function getWikiId(){
        return $this->wikiId;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function getContent(){
        return $this->content;
    }
    public function setWikiImg($wikiImg){
        $this->wikiImg = $wikiImg;
    }
    public function getWikiImg(){
        return $this->wikiImg;
    }
    public function setUserId(Appuser $userId){
        $this->userId = $userId;
    }
    public function getUserId() {
        return $this->userId;
    }
    public function setCategoryId(Category $categoryId){
        $this->categoryId = $categoryId;
    }
    public function getCategoryId(){
        return $this->categoryId;
    }
    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }
}

?>