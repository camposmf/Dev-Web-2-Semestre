<?php
  /*
  Descrubra se $numero é :
  - Divisível por 10
  - Divisível por 3
  - Se não é divisível por nenhum destes 

  Imprimir mensagem na tela do número e as condições acima.
  */
  // int
  $numero = 150;

  if($numero % 3 == 0 && $numero % 10 == 0)
    echo "$numero é divisível tanto por 3 quanto por 10";
  else if($numero % 3 == 0)
    echo "$numero é divisível por 3";
  else if($numero % 10 == 0)
    echo "$numero é divisível por 10";
  else
    echo "não é divisível nem por 3 nem por 10";

?>