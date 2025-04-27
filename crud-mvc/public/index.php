<?php
require_once(__DIR__ . '/../app/controllers/MahasiswaController.php');

// Handle the action
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

$controller = new MahasiswaController();

// Route the requests
switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id);
        break;
    case 'delete':
        $controller->confirmDelete($id);
        break;
    case 'destroy':
        $controller->destroy($id);
        break;
    default:
        $controller->index();
        break;
}
?>