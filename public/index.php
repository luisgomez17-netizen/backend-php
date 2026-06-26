<?php

require_once '../clases/Persona.php';

$sebas = new Persona();
$sebas->saludar();

require_once "../clases/animal.php";

$tobi = new animal();
$tobi->perro();
$tobi->ladrar();