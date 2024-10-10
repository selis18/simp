<?php

namespace App;

use App\Person;
//Наследование
class Doctor extends Person
{
    use HasStatus;
    private int $amountPatient;
    private bool $busy = false;
    public function getInfo(): string
    {
        return "Hello, I`m doctor " . $this->getName();
    }

    /**
     * @param int $amountPatient
     */
    public function setAmountPatient(int $amountPatient): void
    {
        $this->amountPatient = $amountPatient;
    }

    /**
     * @return int
     */
    public function getAmountPatient(): int
    {
        return $this->amountPatient;
    }
}