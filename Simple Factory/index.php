<?php

// Simple Factory

//  Situação real
// Imagine que você seja uma produtora e precise fazer mais artistas. Porém, o processo é um pouco burocratico, é necessário assinar, e envias contratos.
// Então você tem a ideia de contratar uma fábrica de artistas que já assina e envia o contrato.

class Artist {
    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}

class ArtistFactory {
    public function makeArtist($name, $type) {
        $this->signContract();
        $this->sendContract();

        return new Artist($name, $type);
    }

    private function signContract()
    {
        return true;
    }

    private function sendContract()
    {
        return true;
    }
}

$artistFactory = new ArtistFactory();
$eminem = $artistFactory->makeArtist('Eminem', 'Rap');
$edsheeran = $artistFactory->makeArtist('Ed Sheeran', 'Pop');
