<?php

namespace Imperium;

class Soldier
{
    private $hp = 50;
    private $attack = 12;
    private $name;

    public function __construct($name, $hp = 50, $attack = 12)
    {

        $this->hp = $hp;
        $this->attack = $attack;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function doDamage($defSoldier)
    {
        $newHp = $defSoldier->getHp() - $this->attack;
        $defSoldier->setHp($newHp);
    }
    public function __toString()
    {
        return $this->name . " the Imperium Space Marine : " . $this->hp . " HP.";
    }
}


namespace Chaos;

class Soldier
{
    private $hp = 70;
    private $attack = 12;
    private $name;

    public function __construct($name, $hp = 70, $attack = 12)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function doDamage($defSoldier)
    {
        $newHp = $defSoldier->getHp() - $this->attack;
        $defSoldier->setHp($newHp);
    }

    public function __toString()
    {
        return $this->name . " the Chaos Space Marine : " . $this->hp . " HP.";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
