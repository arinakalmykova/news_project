<?php
require_once __DIR__ . '/app/controller/NewsController.php';

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

$controller = new NewsController();

switch ($action) {
    case 'list':
        $controller->show();
        break;
    case 'show':
        if ($id) {
            $controller->choice($id);
        } else {
            echo "Новость не выбрана.";
        }
        break;
    default:
        echo "Неизвестное действие.";
}
