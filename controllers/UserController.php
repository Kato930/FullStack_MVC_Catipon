<?php
require_once 'models/User.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function showLogin() { require 'views/login.php'; }
    public function showRegister() { require 'views/register.php'; }
    public function showDashboard() { require 'views/dashboard.php'; }
    public function showUsers() {
        $users = $this->userModel->getAllUsers();
        require 'views/users.php';
    }

    public function handleRegister($data) {
        $this->userModel->register($data['username'], $data['email'], $data['password']);
        header('Location: index.php?action=login');
    }

    public function handleLogin($data) {
        $user = $this->userModel->login($data['username'], $data['password']);
        if ($user) {
            header('Location: index.php?action=dashboard');
        } else {
            header('Location: index.php?action=login&error=1');
        }
    }
}
