<?php

/**
 * Clase estática que contiene métodos para
 * realizar operaciones básicas: suma, resta,
 * multiplicación y división.
 * 
 * @author Míriam Érika Alarcón Icochea
 * 
 * @version 1.7
 */
class Calculadora {
  /**
   * Función que recibe dos números como parámetros y realiza la suma de los dos números.
   * @since 1.1
   * @see http://ejemplo.es 
   * @version 1.1
   * @param Integer $num1 primer sumando.
   * @param Integer $num2 segudno sumando.
   * @return Integer Devuelve la suma entre el primer y segundo número.
   */
  public static function sumar($num1, $num2) {
    return $num1 + $num2;
  }
  /**
   * Función que recibe dos números como parámetros y realiza la resta de los dos números.
   * @version 1.1
   * @param Integer $num1 minuendo
   * @param Integer $num2 substraendo
   * @return Integer Devuelve la diferencia entre el minuendo y substraendo 
   */
  public static function restar($num1, $num2) {
    return $num1 - $num2;
  }
  /**
   * Función que recibe dos números como parámetros y realiza la mulltiplicación de los dos números.
   * @version 1.1
   * @param Integer $num1 primer factor de la multiplicación.
   * @param Integer $num2 segundo factor de la multiplicación.
   * @return Integer Devuelve el producto de los dos factores.
   */
  public static function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }
  /**
   * Función que recibe dos números como parámetros y realiza la división de los dos números.
   * @version 1.1
   * @param Integer $num1 Número entero que representa al dividendo
   * @param Integer $num2 Número entero que representa al divisor. Si es igual a 0 dará error.
   * @return string Devuelve una cadena de texto con el resultado de la división. Si el divisor es igual a 0 devolverá un mensaje de error.
   */
  public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
  
}

?>
