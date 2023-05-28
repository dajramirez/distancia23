<?php

/**
 * Calcula el factorial de un número dado usando recursividad.
 * 
 * @param int $numero Representa el número para el que queremos calcular el factorial. 
 * 
 * @return int Factorial del número de entrada.
 *
 * @version 1.0
 *
 * @since 1.0
 *
 * @link https://es.wikipedia.org/wiki/Factorial
 */
function factorial(int $numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * factorial($numero - 1);
    }
}

/**
 * La función calcula el número n en la secuencia de Fibonacci.
 * 
 * @param int $n n-ésimo número de Fibonacci.
 * 
 * @return int Número n en la secuencia de Fibonacci, donde n es el parámetro de entrada. 
 * Si la entrada es menor o igual a 0, la función devuelve un mensaje que indica que el número debe ser mayor que cero.
 * Si la entrada es 1, la función devuelve  0
 * y si la entrada es 2, la función devuelve 1. 
 * Para todas las demás entradas, la función calcula el número n en la secuencia de Fibonacci mediante un bucle.
 * Primero inicializa un array con los dos primeros números de la secuencia (0 y 1).
 * Luego usa un for para calcular los números restantes en la secuencia hasta el número n. 
 * Cada número es la suma de los dos números precedentes en la secuencia. 
 * Finalmente, devuelve el número n en la secuencia accediendo al índice correspondiente en el array (n-1).
 *
 * @version 1.0
 *
 * @since 1.0
 *
 * @link https://es.wikipedia.org/wiki/Sucesi%C3%B3n_de_Fibonacci
 */

function fibonacci(int $n) {
    if ($n <= 0) {
        return "El número debe ser mayor que cero.";
    } elseif ($n == 1) {
        return 0;
    } elseif ($n == 2) {
        return 1;
    } else {
        $fibonacci = array(0, 1);
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
        }
        return $fibonacci[$n-1];
    }
}
