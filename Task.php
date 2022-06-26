<?php

class Task {

    public $description;
    public $completed = false;

    public function __construct () {


    }

    public function isCompleted () {
        return $this->completed;
    }

    public function complete() {
        echo "$this->description is completed";
        $this->completed = true;
    }
}