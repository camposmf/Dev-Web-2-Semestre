<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
    function validar_post($dado_enviado){
        if(isset($dado_enviado) and $dado_enviado <> ""){
            return TRUE;
        }
        return FALSE;
    }

    if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){
        require_once('./dados_banco.php');

        try {
           // conexão com banco de dados
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
           $nome = $_POST['firstName'];
           $sobrenome = $_POST['lastName'];

           // montar um comando sql
           $sql = "INSERT INTO users (nm_nome, nm_sobrenome) VALUES ('$nome', '$sobrenome')";

           // use exec() because no results are returned
           $conn->exec($sql);
           echo "New record created successfully";
        }
        catch(PDOException $e) {
           echo $sql . "<br>" . $e->getMessage();
        }
    
        $conn = null;
    }

?>
</body>
</html>