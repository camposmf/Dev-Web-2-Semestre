<?php
/*
    Faça o cálculo da média simples de 
    $nota_1 e $nota_2.
    Imprima a média simples.
    Imprima a condição:
        Se a média menor ou igual a 4.9, reprovado.
        Se a média entre 5 e 7, recuperação.
        Se a média acima de 7, aprovado.

    Crie uma função com o nome calculo_media.
    Use tipagem estrita e limite os parâmetros a receber float.
    */

    function CalcularMediaSimples(float $nota1, float $nota2):float {
        return ($nota1 + $nota2) / 2;
    }

    function DefinirSituacaoAluno(float $mediaSimples):string {
        $mensagem = '';

        if($mediaSimples <= 4.9)
            $mensagem = 'aluno reprovado!';
        else if($mediaSimples >= 5 && $mediaSimples < 7)
            $mensagem = 'aluno em recuperação!!';
        else
            $mensagem = 'aluno aprovado!!!';

        return $mensagem;
    }

    $nota_1 = 9;
    $nota_2 = 4;

    $mediaSimples = CalcularMediaSimples($nota_1, $nota_2);

    printf("A média simples é %d", $mediaSimples);
    echo '</br></br>';
    
    $situacao = DefinirSituacaoAluno($mediaSimples);

    printf("Situação: %s", $situacao);
?>