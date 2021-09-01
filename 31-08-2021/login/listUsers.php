

<?php

  session_start();

  echo 'Welcome to List Users Page<br /><br />';

  // mostrar os dados da secShow anterior
  echo "<b> Primeiro Nome: </b>"    .$_SESSION["first-name"]  ."<br/>";
  echo "<b> Número do CPF: </b>"    .$_SESSION["cpf-number"]   ."<br/>";
  echo "<b> Time do Coração: </b>"  .$_SESSION["heart-team"]  ."<br/>";

  echo '<br /><a href="welcome.php">Página de Welcome</a>';

?>