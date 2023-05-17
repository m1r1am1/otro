<?php
/**
 * Funciones que realizan operaciones de
 * suma, resta, multiplicación y división.
 * Cada función recibe dos parámetros para operar.
 * 
 * @author Míriam Érika Alarcón Icochea
 * 
 * @version 1.3
 * 
 */

/**
 * @param Integer $num1 primer sumando.
 * @param Integer $num2 segudno sumando.
 * @return Integer Devuelve la suma entre el primer y segundo número.
 */
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
 * @deprecated El código interno ya no lo usa 
 * @since 1.2
 * @param Integer $num1 minuendo
 * @param Integer $num2 substraendo
 * @return Integer Devuelve la diferencia entre el minuendo y substraendo 
 */
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
 * @internal 
 * @param Integer $num1 primer factor de la multiplicación.
 * @param Integer $num2 segundo factor de la multiplicación.
 * @return Integer Devuelve el producto de los dos factores.
 * @since 1.2
 */
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}
/**
 * @internal Función que devuelve el resultado de la división de dos números.
 * @param Integer $num1 Número entero que representa al dividendo
 * @param Integer $num2 Número entero que representa al divisor. Si es igual a 0 dará error.
 * @return string Devuelve una cadena de texto con el resultado de la división. Si el divisor es igual a 0 devolverá un mensaje de error.
 * @since 1.1
 */
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

?>
