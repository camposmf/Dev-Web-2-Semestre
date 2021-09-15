<?php
  class Pessoa {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $timeCoracao;

    public function __construct( $nome, $sobrenome, $cpf, $timeCoracao){
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->cpf = $cpf;
      $this->timeCoracao = "Corinthians";
    }

    public function getNomeCompleto(){
      if(is_string($this->nome) && is_string($this->sobrenome))
        return "{$this->nome} {$this->sobrenome}";
    }

    public function getNome(){
      return $this->nome;
    }

    public function getSobrenome(){
      return $this->sobrenome;
    }

    public function getCpf(){
      return $this->cpf;
    }

    public function getTimeCoracao(){

      return $this->timeCoracao;
    }

    public function setNome($nome){
      if(is_string($nome))
       return $this->nome = $nome;
    }

    public function setSobrenome($sobrenome){
      if(is_string($sobrenome))
        return $this->nome = $sobrenome;
    }

    public function setCpf($cpf){
      if(is_string($cpf))
        return $this->cpf = $cpf;
    }

    public function setTimeCoracao($timeCoracao){
      if(is_string($timeCoracao)){
        if($timeCoracao != "Palmeiras")
          return $this->timeCoracao = "Corinthians";

         return $this->timeCoracao = "${timeCoracao} não tem copinha e muito menos mundial :)";
      }
    }
  }

  
  $pessoa = new Pessoa("Barry", "Allen", "054.050.370-36", "Corinthians");
  $pessoa->setTimeCoracao("Palmeiras");

  print 'Objeto Pessoa <br><br>'.PHP_EOL;
  print '<strong>Nome Completo: </strong>'. $pessoa->getNomeCompleto().'<br>'.PHP_EOL;
  print '<strong>Número do CPF: </strong>'. $pessoa->getCpf().'<br>'.PHP_EOL;
  print '<strong>Time do coração: </strong>'. $pessoa->getTimeCoracao().'<br>'.PHP_EOL;
  
  unset($pessoa);



?>