<?php

use App\Controller\AuthController;
use App\Controller\UserController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$userController = new UserController();
switch ($page) {
    case 'users':
        switch ($action) {
            case "show-list":
                $userController->index();
                break;
            case "delete":
                $id = $_REQUEST['id'];
                $userController->delete($id);
                break;
            case "add":
                break;
        }
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

}