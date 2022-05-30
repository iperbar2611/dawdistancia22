<?php
/**
  *  @author Ignacio
  *  @version 1.0
*/

  /**
    * Función que saluda a la persona cuyo nombre es introducido.
    * @param string $nombre
    * @return string
  */
function saludar($nombre){
      echo "Hola $nombre";
   }

/**
    * Función que multiplica un número dado por dos.
    * @param int $num
    * @return int
  */
<?php
   function multiplicarPor2($num){
      $num *= 2;
   }
?>

/**
    * @var int $numero
*/
   $numero = 10;

/**
*uso de las funciones anteriormente definidas.
*/
   multiplicarPor2($numero);
   echo $numero;
   saludar('Fernando');
?>
