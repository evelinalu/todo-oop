<?php
include("includes/config.php");
include("includes/classes/Todo.class.php");

if(isset($_POST['task'])) {
    $task = $_POST['task'];

    $todo = new Todo(); {

    if($task->setTask > 0) {
            
        } else {
            $_SESSION['errormsg'] = "Fyll i något";
            header("location: index.php");
        }
    }
}

