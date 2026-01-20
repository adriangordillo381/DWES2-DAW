<?php

//Diseña una clase llamada alumno.
//seran atributos de alumno, su numero de expediente, nombre, apellido,
// fecha de nacimiento y curso en el que se matricula. La clase debe incluir
//un constructor y los metodos get y set correspondientes. instancia varios objetos de esta
//clase y prueba los metodos creados
class Alumno
{
    // Atributos (propiedades)
    private $expediente;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $curso;

    public function __construct($expediente, $nombre, $apellido, $fechaNacimiento, $curso)
    {
        $this->expediente = $expediente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->curso = $curso;
    }

    public function getExpediente()
    {
        return $this->expediente;
    }

    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
        return $this;
    }
}


