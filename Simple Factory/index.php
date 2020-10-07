<?php

/*
 * nome: Simple Factory
 * resumo: gera uma instância da classe sem expor qualquer lógica de instanciação
 * qual o tipo: Design Pattern de Criação
 * quando usar: Quando for criar algum objeto que precise efetuar alguns processos antes de ser instanciado.
 * exemplo: Imagina que em seu sistema, o objeto pagamento sempre efetua uma lógica ao ser instanciado.
 * se você ficar reescrevendo a lógica toda vez que for fazer um tipo de pagamento novo, além
 * de trabalhoso não seria nada elegante. Então, por que não ter uma fábrica pra isso?
 * Com a fábrica, ela já retorna a instancia de payment com os processos efetuados.
 */

class Payment {
    private $value;
    private $type;

    public function __construct($value, $type)
    {
        $this->value = $value;
        $this->type = $type;
    }

    public function doPayment()
    {
        return true;
    }
}

class PaymentFactory {
    public static function makePayment($value, $type)
    {
        return new Payment($value, $type);
    }
}

$mcdonalds = PaymentFactory::makePayment(20, 'McDonalds');
$burguerking = PaymentFactory::makePayment(35, 'BK');

$mcdonalds->doPayment();
$burguerking->doPayment();
