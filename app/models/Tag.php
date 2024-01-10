<?php


class Tag {
    private $tagId;
    private $tagName ;
    private $date ;

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
    public function setDate($date){
        $this->date = $date;
    }
    public function getDate(){
        return $this->date ;
    }
    
}


?>