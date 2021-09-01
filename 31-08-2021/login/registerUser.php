<?php

  define("Filename", "registrar_usuarios.txt");

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    session_start();

    if(!file_exists(Filename))
      $handle = fopen(Filename, "w");
    else 
      $handle = fopen(Filename, "a");

    fwrite($handle, $_POST['first-name']." - ".$_POST['cpf-number']." - ".$_POST['heart-team']."\n");
    fflush($handle);
    fclose($handle);

    // salvando os dados do usuário na secShow
    $_SESSION["first-name"] = $_POST["first-name"];
    $_SESSION["cpf-number"] = $_POST["cpf-number"];
    $_SESSION["heart-team"] = $_POST["heart-team"];

    header("location: listUsers.php");
  }

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Registrar Usuário</h2>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first-name" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Cpf Number</label>
                <input type="number" name="cpf-number" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Heart Team</label>
                <input type="text" name="heart-team" class="form-control" placeholder="Corinthians">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>