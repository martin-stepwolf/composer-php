<?php

namespace App;

class User
{
    public $name;
    public $email;

    public function __contruct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
