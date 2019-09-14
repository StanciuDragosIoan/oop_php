<?php

//define class
class Task
{
    public $description;

    public $completed = false;


    //runs when the class is instantiated
    public function __construct($description)
    {
        $this->description = $description;
    }


    //public method of class to complete a task
    public function complete()
    {
        $this->completed = true;
    }
}


//instantiate class
$task = new Task('Learn OOP');
$task2 = new Task('Pick up groceries');
$task2->complete();
var_dump($task2->completed);