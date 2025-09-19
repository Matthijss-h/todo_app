<?php
include "database.php";

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $conn->query("DELETE FROM tasks WHERE id = $id");
    header("Location: index.php");
}

if (isset($_GET["complete"])) {
    $id = $_GET["complete"];
    $conn->query("UPDATE tasks SET status = 'completed' WHERE id = $id");
    header("Location: index.php");
}