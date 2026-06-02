<?php
//atributos
class Pessoa{
  public $nome;
  public $idade; //se for public pode ser acessado de qualquer lugar

  //métodos construtor
  public function __construct($nome, $idade){
    $this->nome = $nome;
    $this->idade = $idade; //this é atributo global...
  }
  public function apresentar(){
   echo "Olá, meu nome é $this->nome e tenho $this->idade anos.\n";
  }
  public function verificaIdade(){
    // if($this->idade >= 18){
    //   return "$this->nome é maior de idade\n";
    // }else{
    //   return "$this->nome é menor de idade\n";
    // }
    return ($this->idade >= 18) ? "$this->nome é maior de idade\n" : "$this->nome é menor de idade\n";
  }
}

//$ana =  new Pessoa("ana", 28);
//echo "$ana->apresentar";
//$bruno = new Pessoa("bruno", 30);
//$carla = new Pessoa("carla", 16);
//$diego = new Pessoa("diego", 18);
//$diana = new Pessoa("diana", 20);

//echo $ana->apresentar();
//echo $bruno->apresentar();
//echo $carla->apresentar();
//echo $diego->apresentar();
//echo $diana->apresentar();

//echo $ana->verificaIdade();
//echo $bruno->verificaIdade();
//echo $carla->verificaIdade();
//echo $diego->verificaIdade();
//echo $diana->verificaIdade();

$nomes = ["ana", "bruno", "carla", "diego", "diana"];
$idades = [28, 30, 16, 18, 20];
for($i=0; <= 4; $i++){
  ${$nomes[$i]} = new Pessoa($nomes[$i], $idades[$i]);
}
?>