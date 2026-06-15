 <?php
// class Retangulo {
//     public $comprimento;
//     public $largura;

//     public function __construct($comprimento, $largura) {
//         $this->comprimento = $comprimento;
//         $this->largura = $largura;
//     }

//     public function area() {
//         return $this->comprimento * $this->largura;
//     }

//     public function perimetro() {
//         return 2 * ($this->comprimento + $this->largura);
//     }
// }


// $retangulo = new Retangulo(10, 5);
// echo "Área: " . $retangulo->area() . "\n"; 
// echo "Perímetro: " . $retangulo->perimetro() . "\n"; 
//2
// class Produto {
//     public $nome;
//     public $preco;
//     public $quantidade;

//     public function __construct($nome, $preco, $quantidade) {
//         $this->nome = $nome;
//         $this->preco = $preco;
//         $this->quantidade = $quantidade;
//     }

//     public function valorTotal() {
//         return $this->preco * $this->quantidade;
//     }
// }

// $produto = new Produto("Notebook", 3500.00, 3);
// echo "Valor total em estoque: R$ " . $produto->valorTotal() . "\n"; 

//exercicio3
// class ContaBancaria {
//     public $saldo;

//     public function __construct($saldoInicial = 0) {
//         $this->saldo = $saldoInicial;
//     }

//     public function depositar($valor) {
//         if ($valor > 0) {
//             $this->saldo += $valor;
//         }
//     }

//     public function sacar($valor) {
//         if ($valor <= $this->saldo) {
//             $this->saldo -= $valor;
//             return true;
//         } else {
//             echo "Saldo insuficiente para o saque de R$ $valor.\n";
//             return false;
//         }
//     }
// }

// $conta = new ContaBancaria(500);
// $conta->depositar(200);
// $conta->sacar(800); 
// $conta->sacar(400); 
// echo "Saldo atual: R$ " . $conta->saldo . "\n"; 

//exercicio 4

// class Lampada {
//     private $ligada;

//     public function __construct() {
//         $this->ligada = false; 
//     }

//     public function ligar() {
//         $this->ligada = true;
//     }

//     public function desligar() {
//         $this->ligada = false;
//     }

//     public function status() {
//         return $this->ligada ? "A lâmpada está LIGADA.\n" : "A lâmpada está DESLIGADA.\n";
//     }
// }


// $lampada = new Lampada();
// echo $lampada->status();
// $lampada->ligar();
// echo $lampada->status();

//exercicio5

// class Aluno {
//     public $matricula;
//     public $nome;
//     public $notaProva1;
//     public $notaProva2;
//     public $notaTrabalho;

//     public function __construct($matricula, $nome, $p1, $p2, $trabalho) {
//         $this->matricula = $matricula;
//         $this->nome = $nome;
//         $this->notaProva1 = $p1;
//         $this->notaProva2 = $p2;
//         $this->notaTrabalho = $trabalho;
//     }

//     public function media() {
//         $pesoProvas = 2.5;
//         $pesoTrabalho = 2.0;
//         $pesoTotal = ($pesoProvas * 2) + $pesoTrabalho;

//         $soma = ($this->notaProva1 * $pesoProvas) + ($this->notaProva2 * $pesoProvas) + ($this->notaTrabalho * $pesoTrabalho);
//         return $soma / $pesoTotal;
//     }

//     public function notaFinal() {
//         $mediaAtual = $this->media();
//         if ($mediaAtual >= 7.0) {
//             return 0; 
//         } else {
        
//             return 7.0 - $mediaAtual;
//         }
//     }
// }

// $aluno = new Aluno("123", "Carlos", 6.0, 5.5, 7.0);
// echo "Média do aluno: " . round($aluno->media(), 2) . "\n";
// echo "Necessário para a final: " . round($aluno->notaFinal(), 2) . "\n";

//exercicio6
// class Pessoa {
//     public $nome;
//     public $idade;
//     public $peso;
//     public $altura; 

//     public function __construct($nome, $idade, $peso, $altura) {
//         $this->nome = $nome;
//         $this->idade = $idade;
//         $this->peso = $peso;
//         $this->altura = $altura; 
//     }

//     public function envelhecer() {
//         $this->idade++;
//         if ($this->idade < 21) {
//             $this->crescer(8);
//         }
//     }

//     public function engordar($quilos) {
//         $this->peso += $quilos;
//     }

//     public function emagrecer($quilos) {
//         $this->peso -= $quilos;
//     }

//     public function crescer($centimetros) {
//         $this->altura += $centimetros;
//     }
// }


// $pessoa = new Pessoa("Ana", 18, 60, 160);
// $pessoa->envelhecer();
// echo "Nova Idade: " . $pessoa->idade . " anos | Nova Altura: " . $pessoa->altura . " cm\n";

//exercicio7
// class ContaInvestimento {
//     public $saldo;
//     public $taxa_juros;

//     public function __construct($saldoInicial, $taxa_juros) {
//         $this->saldo = $saldoInicial;
//         $this->taxa_juros = $taxa_juros; 
//     }

//     public function adicione_juros() {
//         $this->saldo += $this->saldo * ($this->taxa_juros / 100);
//     }
// }

// $poupanca = new ContaInvestimento(1000.00, 10);

// for ($i = 0; $i < 5; $i++) {
//     $poupanca->adicione_juros();
// }

// echo "Saldo resultante após 5 aplicações de juros: R$ " . number_format($poupanca->saldo, 2, ',', '.') . "\n";

//exercicio8
// class BombaCombustivel {
//     public $tipo_combustivel;
//     public $valor_litro;
//     public $quantidade_combustivel;

//     public function __construct($tipo, $valor, $quantidadeTotal) {
//         $this->tipo_combustivel = $tipo;
//         $this->valor_litro = $valor;
//         $this->quantidade_combustivel = $quantidadeTotal;
//     }

//     public function abastecer_por_valor($valorASerAbastecido) {
//         $litros = $valorASerAbastecido / $this->valor_litro;

//         if ($litros <= $this->quantidade_combustivel) {
//             $this->quantidade_combustivel -= $litros;
//             echo "Foram colocados " . round($litros, 2) . " litros de " . $this->tipo_combustivel . ".\n";
//         } else {
//             echo "Bomba sem combustível suficiente. Quantidade disponível: " . round($this->quantidade_combustivel, 2) . "L\n";
//         }
//     }

//     public function abastecer_por_litro($litrosPretendidos) {
//         if ($litrosPretendidos <= $this->quantidade_combustivel) {
//             $valorAPagar = $litrosPretendidos * $this->valor_litro;
//             $this->quantidade_combustivel -= $litrosPretendidos;
//             echo "Valor a ser pago pelo cliente: R$ " . number_format($valorAPagar, 2, ',', '.') . "\n";
//         } else {
//             echo "Bomba sem combustível suficiente. Quantidade disponível: " . round($this->quantidade_combustivel, 2) . "L\n";
//         }
//     }

//     public function alterar_valor($novoValor) {
//         $this->valor_litro = $novoValor;
//     }

//     public function alterar_combustivel($novoTipo) {
//         $this->tipo_combustivel = $novoTipo;
//     }

//     public function alterar_quantidade_combustivel($novaQuantidade) {
//         $this->quantidade_combustivel = $novaQuantidade;
//     }
// }

// $bomba = new BombaCombustivel("gasolina", 5.50, 1000);
// $bomba->abastecer_por_valor(110); 
// echo "Restante na bomba: " . round($bomba->quantidade_combustivel, 2) . "L\n";

//exercicio9
// class Usuario {
//     public $username;
//     private $senha; 

//     public function __construct($username, $senha) {
//         $this->username = $username;
//         $this->senha = $senha;
//     }

//     public function verifica_senha($entrada) {
//         if ($entrada === $this->senha) {
//             return true;
//         }
//         return false;
//     }
// }

// $usuario = new Usuario("admin", "12345");
// var_dump($usuario->verifica_senha("errado")); 
// var_dump($usuario->verifica_senha("12345"));  

//exercicio10
// class Temperatura {
//     public $celsius;

//     public function __construct($celsius) {
//         $this->celsius = $celsius;
//     }

//     public function celsius_fahrenheit() {
//         return ($this->celsius * 9/5) + 32;
//     }

//     public function celsius_kelvin() {
//         return $this->celsius + 273.15;
//     }
// }

// // Exemplo de uso:
// $temp = new Temperatura(25);
// echo "25°C em Fahrenheit: " . $temp->celsius_fahrenheit() . "°F\n"; // 77°F
// echo "25°C em Kelvin: " . $temp->celsius_kelvin() . "K\n"; // 298.15K
// ?>