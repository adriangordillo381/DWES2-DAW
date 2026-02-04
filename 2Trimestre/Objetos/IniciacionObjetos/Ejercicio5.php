<?php

/*
Diseña un programa Php que cree una clase llamada DvdCine. 
Su atributos serán: título, director, productora, actores principales, género, resumen y duración. 
Debe incluir un constructor que reciba como parámetros los atributos.
Crea un método llamado esThriller que devuelva true o false según la película sea o no de este género. 
Crea todos los métodos gets/sets.
Crea un método llamada mismaProductora que reciba un objeto de la clase DvdCine como parámetro. Este método devuelve true o false si el objeto utilizado con el método es de la misma productora que el pasado como parámetro.

*/
class DvdCine
{
    private string $titulo;
    private string $director;
    private string $productora;
    private string $actoresprincipales;
    private string $genero;
    private string $resumen;
    private int $duracion;

    public function __construct(String $titulo, String $director, String $productora, String $actoresprincipales, String $genero, String $resumen, int $duracion)
    {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->productora = $productora;
        $this->actoresprincipales = $actoresprincipales;
        $this->genero = $genero;
        $this->resumen = $resumen;
        $this->duracion = $duracion;
    }

  

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;
        return $this;
    }

    public function getProductora(): string
    {
        return $this->productora;
    }

    public function setProductora(string $productora): self
    {
        $this->productora = $productora;
        return $this;
    }

    public function getActoresprincipales(): string
    {
        return $this->actoresprincipales;
    }

    public function setActoresprincipales(string $actoresprincipales): self
    {
        $this->actoresprincipales = $actoresprincipales;
        return $this;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;
        return $this;
    }

    public function getResumen(): string
    {
        return $this->resumen;
    }

    public function setResumen(string $resumen): self
    {
        $this->resumen = $resumen;
        return $this;
    }

    public function getDuracion(): int
    {
        return $this->duracion;
    }

    public function setDuracion(int $duracion): self
    {
        $this->duracion = $duracion;
        return $this;
    }

    public function esThriller(){
        if ($this->genero=="Thriller"){
            return true;
        }else {
            return false;
        }

        
    }

   public function mismaProductora($otraPelicula) {
    return $this->productora === $otraPelicula->getProductora();
}
}