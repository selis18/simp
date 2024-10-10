<?php

namespace App;

//trait
trait HasStatus
{
    public function setFree() : void
    {
        $this->busy = false;
    }

    public function setBusy() : void
    {
        $this->busy = true;
        $this->amountPatient = AmountPatient::count();
    }

    public function getStatus() : string
    {
        return $this->busy;
    }
}