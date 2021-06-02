<?php


namespace App\Model;


use PDO;

class Database
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=demo';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $PDOException) {
            echo $PDOException->getMessage();
            die();
        }
    }
}