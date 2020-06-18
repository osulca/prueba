<?php

class Persona
{                          // AMBITOS (SCOPE)
    public $nombre;        // public: accesible por toda la aplicacion
    public $email;      // protected: accesible por la clase y su herederos
    public $telefono;     // private: accesible solo por la clase

    public function __construct(string $nombre, string $email, string $telefono)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function cambiarEmail(): void
    {
        echo "email cambiado";
    }
}