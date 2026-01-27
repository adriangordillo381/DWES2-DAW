<?php

/*
2.- Crea un nuevo proyecto en el que copies la clase Alumno del ejercicio 1
 y modifícala añadiendo un atributo estático que almacene el número de objetos
  de esta clase que se instancian (que se crean). El atributo debe ser también privado. 
  Crea un método que permita acceder al valor de ese atributo.

*/


class Alumno {

    // Atributos (propiedades)
    private $expediente;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $curso;

    private static $contadoralumos =0;

    public function __construct($expediente, $nombre, $apellido, $fechaNacimiento, $curso)
    {
        $this->expediente = $expediente;// se utiliza para atributos de la clase
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->curso = $curso;

        self::$contadoralumos++; // se utiliza para atributos estaticos de la clase 
    }


    public static function getNumeroAlumnos(){
       return self::$contadoralumos;
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



?>