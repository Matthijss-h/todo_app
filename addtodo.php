<?php
include "database.php";

// Checks if addtask is set
// Inserts task into database if not empty
// Return to index.php
if(isset($_POST["addtask"])){
    $task = trim($_POST["task"]);
    if(!empty($task)){
        $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
    }
    header("Location: index.php");
}

// Save all tasks in $result
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");