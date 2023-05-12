<?php
//klass för att skapa tasks

class Todo {
    //properties
    private $task = array();

    //metoder
    //set-metod för task
    function setTask(string $task) : bool {
        if($task !== "") {
            $this->task = $name;
            return true;
        }
        return false;
        }
    function getTask() : string {
        return $this->task;
    }
}


?>