<?php
//klass för 
class Todo {
    //properties
    private $task = array();

    //methods
    function __construct() {
        //kontroll om filen existerar
        if(file_exists("todo.json")) {
            // läser in fil
            $file = file_get_contents("todo.json");

            
            //omvandla till php array från JSON
            $this->task = json_decode($file, true);
        }
        
    }

    //set-metod
    function setTask($task) {
    //kontroll om textsträngen är tom, lägger till i arrayen i så fall
        if(strlen($task) > 0) {
            $this->task = $task;
            array_push($task);
        }
    }

}

$jsonData = json_encode($task); //omvandlar till JSON

file_put_contents('todo.json', $jsonData); //Lagrar i filen "todo.json".


?>