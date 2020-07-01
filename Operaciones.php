<?php

class Operaciones{
    public static function suma($nro1, $nro2): void{
        $resultado = $nro1 + $nro2;
        echo "el resultado de la suma es: ".$resultado;
    }

    public static function resta($nro1, $nro2): void{
        $resultado = $nro1 - $nro2;
        echo "el resultado de la resta es: ".$resultado;
    }

    public static function multiplicacion($nro1, $nro2): void{
        $resultado = $nro1 * $nro2;
        echo "el resultado de la multiplicacion es: ".$resultado;
    }

    public static function division($nro1, $nro2): void{
        $resultado = $nro1 / $nro2;
        echo "el resultado de la division es: ".$resultado;
    }

}