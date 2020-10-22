<?php


class HeroFactory
{
    public static function makeHero($name, $cpf, $nameLocal, $location) : Hero
    {
        return new Hero($name, $cpf, new Local(
            $nameLocal, $location
        ));
    }
}