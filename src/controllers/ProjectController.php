<?php

require_once 'base/BaseController.php';

class ProjectController extends BaseController{

    public function index() {
        include 'src/views/templates/projects/index.html';
    }

    public function form() {
        include 'src/views/templates/projects/form.html';
        echo "this is the form";
    }
}