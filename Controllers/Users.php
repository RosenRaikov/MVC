<?php

namespace Controllers;

class Users
{
    public function hello(string $firstName, string $lastName){
        echo "Hello " . ucfirst($firstName) . " " . ucfirst($lastName) . "!";
    }
}