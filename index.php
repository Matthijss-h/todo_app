<?php
include 'addtodo.php'; 
include 'actionhandler.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="w-100" style="max-width: 600px;">
            <form action="addtodo.php" method="POST" class="row mt-5 mb-4">
                <div class="col">
                    <input type="text" class="form-control" id="TodoInput" name="task" placeholder="Write your TODO">
                </div>
                <div class="col-auto">
                    <button type="submit" name="addtask" class="btn btn-primary">Add TODO</button>
                </div>
            </form>

            <ul class="list-group">
                <?php 
                while($row = $result->fetch_assoc()): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center <?= $row["status"] === 'completed' ? 'bg-success-subtle' : ''; ?>">
                        <strong><?= $row["task"]; ?></strong>
                        <div class="d-flex gap-2">
                            <a href="index.php?complete=<?= $row["id"]; ?>" class="btn btn-success">Complete</a>
                            <a href="index.php?delete=<?= $row["id"]; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</body>
</html>