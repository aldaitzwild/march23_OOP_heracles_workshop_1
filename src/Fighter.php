<?php

class Fighter 
{
    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life;

    public const MAX_LIFE = 100;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = self::MAX_LIFE;
    }

    public function fight(Fighter $opponent): void
    {
        $attack = rand(1, $this->strength);
        $damage = $attack - $opponent->dexterity;

        if($damage < 0) $damage = 0;

        $opponent->life -= $damage;

        if($opponent->life < 0) $opponent->life = 0;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getLife() : int
    {
        return $this->life;
    }

    public function isAlive() : bool
    {
        return $this->getLife() > 0;
    }
}