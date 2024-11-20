<?php
require 'Task.php';

class TaskController {
    public function index() {
        $tasks = Task::getAll();
        require 'task_list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $taskName = $_POST['task_name'];
            Task::add($taskName);
            header('Location: index.php');
        } else {
            require 'task_create.php';
        }
    }

    public function delete() {
        if (isset($_GET['index'])) {
            $index = $_GET['index'];
            Task::delete($index);
            header('Location: index.php');
        }
    }
}
