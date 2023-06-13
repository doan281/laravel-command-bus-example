<?php

namespace App\Models\Commands;

class UserBaseCommand
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($params)
    {
        $this->id = isset($params['id']) ? $params['id'] : null;
        $this->name = isset($params['name']) ? $params['name'] : null;
        $this->email = isset($params['email']) ? $params['email'] : null;
        $this->password = isset($params['password']) ? $params['password'] : null;
    }

    public function id()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }

    public function email()
    {
        return $this->email;
    }

    public function password()
    {
        return $this->password;
    }
}