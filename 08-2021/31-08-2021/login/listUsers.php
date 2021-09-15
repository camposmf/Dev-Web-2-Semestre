

<?php
  define("Filename", "registrar_usuarios.txt");
  
  //session_start();

  echo 'Welcome to List Users Page<br /><br />';

  $handle  = fopen(Filename, 'r');

  while(!feof($handle)) {
   $getLineContent = fgets($handle, 1024);
   echo $getLineContent.'<br />';
  }
  
  fflush($handle);
  fclose($handle);
  
  echo '<br /><a href="registerUser.php">Registrar novo usuário</a>';
  echo '<br /><br/><a href="welcome.php">Página de Welcome</a>';
?>