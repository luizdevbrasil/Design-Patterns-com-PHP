<?php


class HeroBuilder
{
    public $name;
    public $eletric;
    public $water;
    public $age;

    public function addName(string $name) : HeroBuilder
    {
        $this->name = $name;
        return $this;
    }

    public function addAge($age) : HeroBuilder
    {
        $this->age = $age;
        return $this;
    }

    public function addEletric() : HeroBuilder
    {
        $this->eletric = true;
        return $this;
    }

    public function addWater() : HeroBuilder
    {
        $this->water = true;
        return $this;
    }

    public function build() : Hero
    {
        return new Hero($this);
    }
}