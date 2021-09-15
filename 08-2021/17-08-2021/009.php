<?php
    /*
    Faça o cálculo da média simples de 
    $nota_1 e $nota_2.
    Imprima a média simples.
    Imprima a condição:
        Se a média menor ou igual a 4.9, reprovado.
        Se a média entre 5 e 7, recuperação.
        Se a média acima de 7, aprovado.
    */
    
    $nota_1 = 9;
    $nota_2 = 4;

    $mediaSimples = (($nota_1 + $nota_2) / 2);

    printf("A média simples é %d", $mediaSimples);
    echo '</br></br>';

    if($mediaSimples <= 4.9)
        echo 'aluno reprovado!';
    
    else if($mediaSimples >= 5 && $mediaSimples < 7)
        echo 'aluno em recuperação!!';
    
    else
        echo 'aluno aprovado!!!';


?>