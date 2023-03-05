<?php

class Article {
    private $id;
    private $title;
    private $song_name;
    private $category_name;
    private $summany;
    private $content;
    private $author_name;
    private $date;
    private $image;

    public function __construct($id, $title, $song_name, $category_name, $summany, $content, $author_name, $date, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->song_name = $song_name;
        $this->category_name = $category_name;
        $this->summany = $summany;
        $this->content = $content;
        $this->author_name = $author_name;
        $this->date = $date;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getSong_name()
    {
        return $this->song_name;
    }

    public function setSong_name($song_name)
    {
        $this->song_name = $song_name;
        return $this;
    }

    public function getCategory_name()
    {
        return $this->category_name;
    }

    public function setCategory_name($category_name)
    {
        $this->category_name = $category_name;
        return $this;
    }

    public function getSummany()
    {
        return $this->summany;
    }

    public function setSummany($summany)
    {
        $this->summany = $summany;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getAuthor_name()
    {
        return $this->author_name;
    }

    public function setAuthor_name($author_name)
    {
        $this->author_name = $author_name;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
}