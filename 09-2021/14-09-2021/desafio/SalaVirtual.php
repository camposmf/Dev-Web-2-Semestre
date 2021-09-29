<?php

  abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $pessoaPresenca;
    protected $possuiColecaoBonecos;

    protected function formatarPresenca($presenca){
      $result;
      $presenca == true ? $result = "Presente" : $result = "Faltou";
      return $result;
    }

    protected function formatarColecaoBrinquedos($possuiColecaoBonecos){
      $result;
      $possuiColecaoBonecos ? $result = "Sim" : $result = "Não";
      return $result;
    }
  }

  class Professor extends Pessoa {
    private $materiaAula;

    public function __construct($nome, $idade, $materiaAula, $pessoaPresenca, $possuiColecaoBonecos){
      if(is_string($nome))
        $this->nome = $nome;

      if(is_numeric($idade))
        $this->idade = $idade;

      if(is_string($materiaAula))
        $this->materiaAula = $materiaAula;

      if(is_bool($pessoaPresenca))
        $this->pessoaPresenca = $pessoaPresenca;

      if(is_bool($possuiColecaoBonecos))
        $this->possuiColecaoBonecos = $possuiColecaoBonecos;

      $this->listarProfessor();
    }

    public function listarProfessor(){
      print "Nome do professor: {$this->nome}<br/>";
      print "Idade do professor: {$this->idade}<br/>";
      print "Matéria do professor: {$this->materiaAula}<br/>";

      $statusPresenca = $this->formatarPresenca($this->pessoaPresenca);
      $statusColecaoBrinquedos = $this->formatarColecaoBrinquedos($this->possuiColecaoBonecos);

      print "Professor esteve presente: {$statusPresenca} <br/>";
      print "Professor possuí coleção de bonecos: {$statusColecaoBrinquedos}<br/><br/>";
    }
  }

  class Aluno extends Pessoa {
    private $curso;
    private $alunos = array();

    public function __construct($alunos){
      if(is_array($alunos))
        $this->alunos = $alunos;

      $this->listarAlunos();
    }
    
    public function listarAlunos(){
      foreach ($this->alunos as $alunos => $value) {
        print "Nome do aluno: {$value[0]}<br/>";
        print "Idade do aluno: {$value[1]}<br/>";
        print "Curso do aluno: {$value[2]}<br/>";
  
        $statusPresenca = $this->formatarPresenca($value[3]);
        $statusColecaoBrinquedos = $this->formatarColecaoBrinquedos($value[4]);
  
        print "Aluno esteve presente: {$statusPresenca} <br/>";
        print "Aluno possuí coleção de bonecos: {$statusColecaoBrinquedos}<br/><br/>";
      }
    }
  }

  $professor = new Professor("Orlando", 15, "DSM", true, false);
  $professor.listarAlunos();
  
  $alunos = [
    ["Bart", 19, "Arquitetura de Software", false, true],
    ["Barry", 31, "Engenharia de Software", true, true],
    ["Craque Neto", 55, "Jugador", false, false],
    ["Marcolino", 22, "Desenvolvimento de Software em multiplataformas", true, true]
  ];

  $aluno = new Aluno($alunos);
  unset($professor);
  unset($aluno);
?>