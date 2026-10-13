<?php

class Curso 
{
    public function __construct(
        protected string $titulo,
        protected string $subtitulo,
        protected string $descripcion,
        protected array $etiquetas
    ) {
        //throw new \Exception('Not implemented');
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null;
    }

    public function addEtiquetas(string $etiqueta): void 
    {
        if (in_array($etiqueta, $this->etiquetas)) {
            return;
        }

        if (empty($etiqueta)) {
            return;
        }

        $this->etiquetas[] = $etiqueta;
    }
}