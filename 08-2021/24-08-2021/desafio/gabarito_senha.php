<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php

    define("PASSWORD", "!palmeiras_tem_mundial");
    define("FILENAME", "registrar_tentativas.txt");

    function invalidPasswordRegister() {
        echo "Erroooou! </br> A senha é... Espera não devo falar!";

        if(!file_exists(FILENAME))
            $handle = fopen(FILENAME, "w");
        else 
            $handle = fopen(FILENAME, "a");

        fwrite($handle, "\n".$_POST['senha']);
        fflush($handle);
        fclose($handle);
    }

    if(isset($_POST['senha'])){
        
        if($_POST['senha'] == PASSWORD)
            echo "Parabéns, realmente o ".$_POST['senha'];

        else
            invalidPasswordRegister();
    }

?>
</body>
</html>