<?php

    require_once('../dados_banco.php');

    // Criar Conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Senão há uma conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Montar comando SQL
    $sql = "INSERT INTO authors (firstname, lastname)
                 VALUES ('John', 'Doe')";

    // Executa uma query no banco de dados
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>