<?php

require_once ("../vendor/autoload.php");

//объекты
$patient = new \App\Patient("Lili", 21);
$doctor = new \App\Doctor("Steve", 37);

//Полиморфизм
var_dump($patient->getInfo());
var_dump($doctor->getInfo());

var_dump($doctor);
$doctor->setBusy();
var_dump($doctor);
$doctor->setFree();
$doctor->setBusy();
var_dump($doctor);