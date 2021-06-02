<?php
namespace App\Controller;

use App\Service\UserService;

class UserController
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    function index() {

        $users = $this->userService->getAll();
        require_once "resource/views/users/list.php";
    }

    function delete($id) {
        $this->userService->deleteById($id);
        header('location: index.php?page=users&action=show-list');
    }
}