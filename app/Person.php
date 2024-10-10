<?php

namespace App;
//базовый класс - Абстракция
abstract class Person implements PersonInterface
{
    //Инкапсуляция
    private string $name;
    private int $age;

    //конструктор
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    //геттеры и сеттеры
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}