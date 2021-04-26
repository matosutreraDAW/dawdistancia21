<?php

        /**
         * funcion que devuelve el cuadrado de un numero introducido como parámetro
         * @param type $núm parámetro introducido
         * @return type cuadrado del número
         * @author Jose Antonio
         * @internal
         * @version
         */
        function cuadrado($núm) {
            return $núm * $núm;
        }

        /**funcion que realiza suma, resta o multiplica, según indiquemos por parámetro, dos numeros introducidos por paramétro
         * y devuelve su resultado
         * 
         * @param type $n1 primer número
         * @param type $n2 segundo numero
         * @param type $operacion operacion a realizar
         * @return type $resultado devuelve el resultado de las operaciones
         * @author Jose Antonio
         * @internal
         * @version
         */
        function operaciones($n1, $n2, $operacion) {

            $resultado = 0;

            if ($operacion == "Sumar") {

		 $resultado = $n1 + $n2;
            } else if ($operacion == "Restar") {

                $resultado = $n1 - $n2;
            } else if ($operacion == "Multiplicar") {

                $resultado = $n1 * $n2;
            }

            return $resultado; // Devolver el resultado
        }
        
        
        ?>


