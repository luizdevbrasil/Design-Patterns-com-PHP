<?php


class Hero
{
    private $name;
    private $eletric;
    private $water;
    private $age;

    public function __construct(HeroBuilder $builder)
    {
        $this->name = $builder->name;
        $this->eletric = $builder->eletric;
        $this->water = $builder->water;
        $this->age = $builder->age;
    }
}