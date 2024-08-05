<?php

require_once 'base/BaseController.php';

class HomeController extends BaseController {

    public function index() {
        include 'src/views/templates/home/index.html';
    }
}