<?php

require_once('vendor/autoload.php');

use League\CLImate\CLImate;

$climate = new CLImate;

$climate->out('[1] Raiz Quadrada');
$climate->out('[2] Fatorial');
$climate->out('[3] Ao Quadrado');

$input = $climate->input('Escolha uma das opções acima: ');
$input->accept(['1', '2', '3']);
$menu = $input->prompt();

class Operacao
{
    public $numero1;

    protected $climate;

    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function input()
    {
        $numero1Input = $this->climate->input('Insira o número:');
        $this->numero1 = $numero1Input->prompt();
    }
}

$operacao = new Operacao($climate);
$operacao->input();

switch ($menu) {
    case '1':
        echo sprintf("Resultado: %s", sqrt($operacao->numero1));
        break;
    case '2':
        $fatorial = 1;
        $numero = $operacao->numero1;
        for($count=1; $count<=$numero; $count++) $fatorial *= $count;
        
        echo sprintf("Resultado: %s", $fatorial);
        break;
        default:
    break;
}
