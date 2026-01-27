<?php

/*
 En un nuevo proyecto, copia la clase Alumno del ejercicio 1, y:
Añade dos atributos que almacenen sendas notas.
Crea los métodos get/set correspondientes, modifica también el constructor para que incluya estas notas.
Crea un método que devuelva la media de las notas.
Crea un método que devuelva número de expediente, nombre y nota media


*/
class Alumno
{
    private $expediente;
    private $nombre;
    private $apellido;
    private $fechanacimiento;
    private $curso;
    private $nota1;
    private $nota2;

    public function __construct($expediente, $nombre, $apellido, $fechanacimiento, $curso, $nota1, $nota2)
    {
        $this->expediente = $expediente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechanacimiento = $fechanacimiento;
        $this->curso = $curso;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

   

    public function mediaNotas()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }

    //método que devuelva número de expediente, nombre y nota media
   
        public function getResumen()
{
    return "Expediente: " . $this->expediente .
           ", Nombre: " . $this->nombre .
           ", Nota media: " . $this->mediaNotas();
}


    public function getExpediente()
    {
        return $this->expediente;
    }

    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
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

    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;
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

    public function getNota1()
    {
        return $this->nota1;
    }

    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;
        return $this;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;
        return $this;
    }
}
$Alumno1 = new Alumno("123","Adrian","Gordillo","24-03-2000","3ºEso","9","9");

echo "Alumno 1:<br>";
echo " Nombre " . $Alumno1->getNombre() . "<br>";
echo "Apellido " . $Alumno1->getApellido() . "<br>";
echo "Fecha de nacimiento" . $Alumno1->getFechaNacimiento() ."<br>";
echo "Curso" . $Alumno1->getCurso() ."<br>";
echo "Nota 1 : " . $Alumno1->getNota1() ."<br>";
echo "Nota 2 : " . $Alumno1->getNota2() ."<br>";
echo "Nota Media " . $Alumno1->mediaNotas();