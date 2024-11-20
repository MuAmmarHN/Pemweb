<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Task List</h1>
        <a href="index.php?action=create">Add Task</a>
        <ul>
            <?php foreach ($tasks as $index => $task): ?>
                <li>
                    <?= htmlspecialchars($task) ?>
                    <a class="delete-link" href="index.php?action=delete&index=<?= $index ?>">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
