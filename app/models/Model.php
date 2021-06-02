<?php


namespace App\Model;


class Model
{
    protected $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }
}