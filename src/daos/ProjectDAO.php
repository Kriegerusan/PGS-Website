<?php

class ProjectDAO{
    
    const SQL_CREATE_REQUEST = "INSERT INTO projects (title, image, genre, releaseYear, description) values (':title', ':image', ':genre', ':releaseYear', ':description')";
    const SQL_DELETE_REQUEST = "DELETE FROM projects WHERE id = :id";
    const SQL_FIND_ALL_REEQUEST = "SELECT * FROM projects";
    const SQL_FIND_REEQUEST = "SELECT * FROM projects WHERE id = :id";

    public function create() {

    }

    public function delete() {

    }

    public function find_all() {

    }

    public function find($id) {

    }

}