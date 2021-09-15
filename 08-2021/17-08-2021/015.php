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
    Crie validações na função, para que os parâmetros aceitos estejam 
    entre 0 e 10.
    Crie constantes para os limites ( 0 e 10 )
    */

    // Definição de uma constante
    define("LIMITE_MINIMO", 0);
    define("LIMITE_MAXIMO", 15);

    $nota_1 = 9;
    $nota_2 = 4;

    function calculo_media(float $nota_1, float $nota_2): float{ 
        $result = 0;

        if(($nota_1 >= LIMITE_MINIMO) && ($nota_1 <= LIMITE_MAXIMO) && 
           ($nota_2 >= LIMITE_MINIMO) && ($nota_2 <= LIMITE_MAXIMO))
        {
            $result = ($nota_1 + $nota_2) / 2;    
        }
             
        return $result;
    }

    function definir_situacao(float $mediaSimples):string {
        $mensagem = '';

        if($mediaSimples <= 4.9)
            $mensagem = 'aluno reprovado!';
        else if($mediaSimples >= 5 && $mediaSimples < 7)
            $mensagem = 'aluno em recuperação!!';
        else
            $mensagem = 'aluno aprovado!!!';

        return $mensagem;
    }

    $media = calculo_media($nota_1, $nota_2);

    printf("A média simples é %d", $media);
    echo '</br></br>';

    $situacao = definir_situacao($media);

    printf("Situação: %s", $situacao);

?>