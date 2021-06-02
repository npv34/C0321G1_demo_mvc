<?php
namespace App\Service;

use App\Model\UserModel;
use App\User;

class UserService implements ServiceInterface
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function getAll()
    {
        $data = $this->userModel->getAll();
        $users = [];

        foreach ($data as $key => $item) {
            $user = new User($item);
            $user->setId($item['id']);
            $users[] = $user;

        }
        return $users;
    }

    function deleteById($id) {
        $this->userModel->destroy($id);
    }
}