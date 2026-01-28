<?php

/*

4.- Diseña un programa Php que trabaje con la clase Alumno del ejercicio 3, copiándola y pegándola en este. Crea otra clase llamada GestionAlumnos con las siguentes características:
Atributos: array de 25 Alumnos
Métodos:
llenarArray, llena el array de alumnos con datos.
mostrarAlumnos, muestra en pantalla cada alumno y su nota media.

*/

    class gestionAlumno {

        private $array = [];
            
        }
class Alumno
{
    private int $expediente;
    private string $nombre;
    private string $apellido;
    private $fechanacimiento;
    private int $curso;
    private int $nota1;
    private int $nota2;
    

    public function __construct($expediente, string $nombre, string $apellido, $fechanacimiento, int $curso, int $nota1, int $nota2)
    {
        $this->expediente = $expediente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechanacimiento = $fechanacimiento;
        $this->curso = $curso;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function getExpediente()
    {
        return $this->expediente;
    }

    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;
        return $this;
    }

    public function getCurso(): int
    {
        return $this->curso;
    }

    public function setCurso(int $curso): self
    {
        $this->curso = $curso;
        return $this;
    }

    public function getNota1(): int
    {
        return $this->nota1;
    }

    public function setNota1(int $nota1): self
    {
        $this->nota1 = $nota1;
        return $this;
    }

    public function getNota2(): int
    {
        return $this->nota2;
    }

    public function setNota2(int $nota2): self
    {
        $this->nota2 = $nota2;
        return $this;
    }
}

    