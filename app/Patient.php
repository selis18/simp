<?php

namespace App;

use App\Person;
//Наследование
class Patient extends Person
{
    public function getInfo(): string
    {
        return "Hello, I`m patient " . $this->getName();
    }
}