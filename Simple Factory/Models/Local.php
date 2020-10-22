<?php


class Local
{
    private $name;
    private $location;

    public function __construct(string $name, array $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function getInformations() : array
    {
        return [
            'name' => $this->name,
            'location' => $this->location
        ];
    }
}