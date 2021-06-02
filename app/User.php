<?php
namespace App;

class User
{
    public $id;
    public $name;
    public $email;
    public $address;
    public $group;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->address = $data['address'];
        $this->group = $data['group_id'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}