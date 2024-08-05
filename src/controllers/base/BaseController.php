<?php

abstract class BaseController{

    protected $title;

    public function __construct($title) {
        //attribution titre
        $this->setTitle($title);
        //inclusion base.php
        require_once 'src/views/base.php';

    }

    function setTitle($title) {
        $this->title = $title;
        return $this;
    }
}