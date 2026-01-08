<?php

//Diseña una clase llamada alumno.
//seran atributos de alumno, su numero de expediente, nombre, apellido,
// fecha de nacimiento y curso en el que se matricula. La clase debe incluir
//un constructor y los metodos get y set correspondientes. instancia varios objetos de esta
//clase y prueba los metodos creados

class Alumno {

    // Atributos (propiedades)
    private $expediente;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $curso;

    // Constructor
    public function __construct($expediente, $nombre, $apellido, $fechaNacimiento, $curso) {
        $this->expediente = $expediente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->curso = $curso;
    }
}

?>