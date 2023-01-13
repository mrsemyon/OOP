<?php

require __DIR__ . '/../src/MyProject/Controllers/MainController.php';

$controller = new \MyProject\Controllers\MainController();

if (!empty($_GET['name'])) {
    $controller->sayHello($_GET['name']);
} else {
    $controller->main();
}
