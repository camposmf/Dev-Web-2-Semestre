<?php

  /*
  Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
  Se estiver fora do intervalo, informar que não existe o mês

  Utilize array.
  */

  $array = [ 
    'Janeiro', 
    'Fevereiro', 
    'Março', 
    'Abril',
    'Maio', 
    'Junho', 
    'Julho', 
    'Agosto', 
    'Setembro', 
    'Outubro', 
    'Novembro', 
    'Dezembro' 
  ];
  
  $getMonth = 13;

  if($getMonth < 1 || $getMonth > 12){
    echo "O mês digitado não existe, tente um número entre 1 à 12";
    die;
  }

  echo $array[$getMonth - 1];

?>