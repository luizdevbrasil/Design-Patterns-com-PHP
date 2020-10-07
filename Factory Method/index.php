<?php

// Factory Method

// Situação - Imagina que você tem uma plataforma de streaming que inicialmente só irá aceitar dois tipos de músicas, rock e pop.
// Porém muito em breve, será necessário ter mais playlists, então não é melhor já prever a implementação?

// Com a factory method, você já cria uma estrutura de classes que prevê o que vem pela frente.

interface ISong {
    public function playSong();
    public function stopSong();
}

class Rock implements ISong {

    public function playSong()
    {
        echo 'Open your eyes. Look up to the skies and see';
    }

    public function stopSong()
    {
        echo 'Stop!!';
    }
}

class Pop implements ISong {

    public function playSong()
    {
        echo 'Darling, just dive right in and follow my lead';
    }

    public function stopSong()
    {
        echo 'Stop!!';
    }
}

abstract class Playlist {
    public abstract function makeSong() : ISong;

    public function playPlaylist()
    {
        $song = $this->makeSong();
        $song->playSong();

        sleep(3000);
        $song->stopSong();
    }
}

class PopPlaylist extends Playlist {

    public function makeSong(): ISong
    {
        return new Pop();
    }
}

class RockPlaylist extends Playlist {

    public function makeSong(): ISong
    {
        return new Rock();
    }
}

$popPlaylist = new PopPlaylist();
$rockPlaylist = new RockPlaylist();

$popPlaylist->playPlaylist();
$rockPlaylist->playPlaylist();

// Alguns anos depois um programador precisou implementar uma playlist nova.

class Pagode implements ISong {

    public function playSong()
    {
        echo 'Tá vendo aquela lua que brilha lá no céu';
    }

    public function stopSong()
    {
        echo 'Stop!!';
    }
}

class PagodePlaylist extends Playlist {

    public function makeSong(): ISong
    {
        return new Pagode();
    }
}

$pagodePlaylist = new PagodePlaylist();
$pagodePlaylist->playPlaylist();
