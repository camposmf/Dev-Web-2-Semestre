<?php
  /*
  Escreva um script que imprima qual o maior número.
  Converter variáveis strings em inteiros
  Use IF
  */

  $a = "10";
  $b = "1";

  // converter string em int
  $a = intval($a);
  $b = intval($b);

  // check value
  if($a > $b)
    echo "a maior que b";
  else
    echo "b maior que a";

?>