<?php


class Tag {
    private $tagId;
    private $tagName ;
    private $created_at ;

    public function __construct(){

    }

    public function setTagId($tagId){
        $this->tagId = $tagId;

    }

    public function getTagId(){
        return $this->tagId ;
    }

    public function setTagName($tagName){
        $this->tagName = $tagName;
    }
    public function getTagName(){
        return $this->tagName ;
    }
    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }

}


?>