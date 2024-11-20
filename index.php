<?php
require 'TaskController.php';

$controller = new TaskController();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'create') {
        $controller->create();
    } elseif ($_GET['action'] === 'delete') {
        $controller->delete();
    }
} else {
    $controller->index();
}
