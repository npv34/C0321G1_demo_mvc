<?php

namespace App\Model;

class UserModel extends Model implements BaseInterface
{
    function getAll()
    {
        $sql = "SELECT `id`, `name`, `email`, `image`, `address`, `group_id` FROM `users`";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    function destroy($id) {
        $sql = "DELETE FROM `users` WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}