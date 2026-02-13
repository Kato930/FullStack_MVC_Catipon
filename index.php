<?php
require_once 'config/db.php';
require_once 'controllers/UserController.php';

$controller = new UserController($pdo);
$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login': $controller->showLogin(); break;
    case 'register': $controller->showRegister(); break;
    case 'dashboard': $controller->showDashboard(); break;
    case 'users': $controller->showUsers(); break;
    
    case 'login_process':
        $controller->handleLogin($_POST);
        break;
    case 'register_process':
        $controller->handleRegister($_POST);
        break;
    case 'logout':
        header('Location: index.php?action=login');
        break;
    default:
        $controller->showLogin();
        break;
}
