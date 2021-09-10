<?php


require 'function.php';



class Task {

    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function completed()
    {
        return $this->completed;
    }

    public function isCompleted()
    {
        $this->completed = true;
    }
}

$task = new Task('Go to store');
$task->isCompleted();
dd($task->completed());

var_dump($task);
die;
require 'index.view.php';




