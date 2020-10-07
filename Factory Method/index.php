<?php

/*
 * @nome Abstract Factory
 * @resumo: Um conceito que permite o filho delegar a lógica de instanciação
 * @quando usar: Quando há um processamento gênerico em uma classe.
 */

interface IGatewayPayment {
    public function sendPayment();
}

class PagSeguro implements IGatewayPayment {

    public function sendPayment()
    {
        return 'Pagamento (PagSeguro) enviado com sucesso!';
    }
}

class PayPal implements IGatewayPayment {

    public function sendPayment()
    {
        return 'Pagamento (PayPal) enviado com sucesso!';
    }
}

abstract class Gateway {
    public abstract function makeGateway() : IGatewayPayment;

    public function processPayment()
    {
        $song = $this->makeGateway();
        $song->sendPayment();
    }
}

class PagSeguroGateway extends Gateway {

    public function makeGateway(): IGatewayPayment
    {
        return new PagSeguro();
    }
}

class PayPalGateway extends Gateway {

    public function makeGateway(): IGatewayPayment
    {
        return new PayPal();
    }
}

if (true == 'PayPal') {
    $paypal = new PayPalGateway();
    $paypal->processPayment();
} else if (true == 'PagSeguro') {
    $pagSeguro = new PagSeguroGateway();
    $pagSeguro->processPayment();
}

