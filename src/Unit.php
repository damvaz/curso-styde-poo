<?php

namespace Styde;

use Styde\Armors\BronzeArmor;
use Styde\Armors\MissingArmor;
use Styde\Translator;
use Styde\Weapon;
use Styde\Weapons\BasicSword;

class Unit
{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name   = $name;
        $this->weapon = $weapon;
        $this->armor  = new MissingArmor();
    }

    public static function createSoldier(string $name)
    {
        $soldier = new Unit($name, new BasicSword);
        $soldier->setArmor(new BronzeArmor());
        return $soldier;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
        return $this;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        Log::info(Translator::get('Walk', ['name' => $this->name]));
    }

    public function attack(Unit $opponent)
    {

        $attack = $this->weapon->createAttack();
        Log::info($attack->getDescription($this, $opponent));
        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);
        Log::info(Translator::get('HasLifePoints', [
            'name' => $this->name,
            'hp'   => $this->hp,
        ]));

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    function die() {
        Log::info(Translator::get('Die', ['name' => $this->name]));
        exit(1);
    }

}
