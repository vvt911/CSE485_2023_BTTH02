<?php
class Article{
    // Thuộc tính
    private $id;
    private $title;
    private $summary;
    private $cat_name;


    public function __construct($id = NULL, $title = "", $summary = "", $cat_name = ""){
        $this->id = $id;
        $this->title = $title;
        $this->summary = $summary;
        $this->cat_name = $cat_name;
    }

    // Setter và Getter
    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getId() {
        return $this->id;
    }
}