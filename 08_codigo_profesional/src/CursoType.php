<?php
namespace App;


enum CursoType: string
{
     case LIBRE = 'Gratuito';
     case PAGO = 'Pago';


     public function getTipo(): string
    {
        return match ($this) {
            self::LIBRE => 'Curso Gratuito.',
            self::PAGO => 'Curso de Pago.',
        };
    }
}


