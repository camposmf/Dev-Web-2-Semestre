<?php

  /*
  Importar a função criada em 014_a.php para ser utilizada aqui.
  */

  
  include './014_a.php';

  // Calcular chamando a função
  $nota_1 = 9;
  $nota_2 = 4;
  $media_simples = calculo_media($nota_1, $nota_2);
  $PrimeiraMediaSimples = definir_situacao($media_simples);

  // Calcular chamando a função
  $nota_1 = 1;
  $nota_2 = 5;
  $media_simples = calculo_media($nota_1, $nota_2);
  $segundaMediaSimples = definir_situacao($media_simples);

  // Calcular chamando a função
  $nota_1 = 5;
  $nota_2 = 3;
  $media_simples = calculo_media($nota_1, $nota_2);
  $terceiraMediaSimples = definir_situacao($media_simples);
  echo '</br></br>';

  printf("Primeira média: %s", $PrimeiraMediaSimples);
  echo '</br></br>';

  printf("Segunda média: %s", $segundaMediaSimples);
  echo '</br></br>';

  printf("Terceira média: %s", $terceiraMediaSimples);
?>