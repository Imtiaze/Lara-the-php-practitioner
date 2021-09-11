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
        $this->completed = true;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function description()
    {
        return $this->description;
    }
}


$tasks = [
    new Task('Go to store'),
    new Task('Do the homework'),
    new Task('Finish the math assignment'),
];


$tasks[0]->completed();



require 'index.view.php';




