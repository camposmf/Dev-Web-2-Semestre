<?php
  /*
  Escreva um script que imprima qual o maior número.
  Use IF .. ELSE
  */
  $a = 10;
  $b = 1;
  $c = 40;

  if($a > $b && $a > $c)
    echo "a maior que b e c";
  else if ($b > $a && $b > $c)
    echo "b maior que a e c";
  else
    echo "c maior que a e b";
    
?>