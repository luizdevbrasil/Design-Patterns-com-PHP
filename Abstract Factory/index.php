<?php

// Abstract Factory
// Um conceito um pouco mais complexo que envolve uma fábrica de fábricas.

// Imagine que você é um contratante de show e você sabe que toda vez que for fazer um show o artista precisa entrar, sair e o local tem que abrir e fechar.
// Então você contrata uma fábrica, que vai depender de outra fábrica de artistas, e depende vai depender de outra fábrica de locais.
// Mas eu já sei que o comportamento vai ser o mesmo, então pra que ficar efetuando tudo do zero?

interface IArtist {
    public function show();
    public function leave();
}

class LadyGaga implements IArtist {

    public function show()
    {
        echo 'I only ask you to show me a real good time';
    }

    public function leave()
    {
        echo 'Bye!';
    }
}

class Beyonce implements IArtist {

    public function show()
    {
        echo 'I can see the stars all the way from here';
    }

    public function leave()
    {
        echo 'Bye!';
    }
}

interface ILocal {
    public function open();
    public function close();
}

class Stadium implements ILocal {

    public function open()
    {
        echo 'Estadio está aberto!';
    }

    public function close()
    {
        echo 'Estadio está fechado!';
    }
}

class Pub implements ILocal {

    public function open()
    {
        echo 'Pub está aberto!';
    }

    public function close()
    {
        echo 'Pub está fechado!';
    }
}

interface IShowFactory {
    public function makeLocal();
    public function makeArtist();
}

class LadyGagaStadiumFactory implements IShowFactory
{
    public function makeLocal()
    {
        return new Stadium();
    }

    public function makeArtist()
    {
        return new LadyGaga();
    }
}

class BeyoncePubFactory implements IShowFactory
{
    public function makeLocal()
    {
        return new Pub();
    }

    public function makeArtist()
    {
        return new Beyonce();
    }
}

$ladyGagaStadiumFactory = new LadyGagaStadiumFactory();
$artist = $ladyGagaStadiumFactory->makeArtist();
$local = $ladyGagaStadiumFactory->makeLocal();
$local->open();
$artist->show();
$artist->leave();
$local->close();

$beyoncePubFactory = new BeyoncePubFactory();
$artist = $beyoncePubFactory->makeArtist();
$local = $beyoncePubFactory->makeLocal();
$local->open();
$artist->show();
$artist->leave();
$local->close();
