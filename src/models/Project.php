<?php

class Project{

    private $title;
    private $image;
    private $genre;
    private $releaseYear;
    private $description;

    public function __construct($title, $image, $genre, $releaseYear, $description) {
        $this
        ->set_title($title)
        ->set_image($image)
        ->set_genre($genre)
        ->set_releaseYear($releaseYear)
        ->set_description($description)
        ;

    }

    public function set_title($title) {
        $this->title = $title;
        return $this;
    }

    public function set_image($image) {
        $this->image = $image;
        return $this;
    }

    public function set_genre($genre) {
        $this->genre = $genre;
        return $this;
    }

    public function set_releaseYear($year) {
        $this->releaseYear = $year;
        return $this;
    }

    public function set_description($description) {
        $this->description = $description;
        return $this;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_image() {
        return $this->image;
    }

    public function get_genre() {
        return $this->genre;
    }

    public function get_releaseYear() {
        return $this->releaseYear;
    }

    public function get_description() {
        return $this->description;
    }

}