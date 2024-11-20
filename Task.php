<?php
session_start();

class Task {
    public static function getAll() {
        return isset($_SESSION['tasks']) ? $_SESSION['tasks'] : [];
    }

    public static function add($taskName) {
        $_SESSION['tasks'][] = $taskName;
    }

    public static function delete($index) {
        if (isset($_SESSION['tasks'][$index])) {
            unset($_SESSION['tasks'][$index]); // Hapus elemen dari array
            $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindex array
        }
    }
}
