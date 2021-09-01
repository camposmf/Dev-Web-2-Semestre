<?php
  /*
  Crie uma função que demonstre 
  - Passagem por valor.
  - Passagem por referência.
  */

  function EnviarMensagemReferencia(int &$valor):int{
    $valor += 1;
  }

  function EnviarMensagemValor(int $valor){
    $valor += 1;
  }

  $mensagem = 1;
  $referencia = EnviarMensagemReferencia($mensagem);
  
  $valor = EnviarMensagemValor($mensagem);

  printf("Valor referência: %s", $referencia);
  echo '</br>';
  printf("Valor: %s", $valor);

?>