<?php

namespace Styde;

use Styde\Translator;

class Attack
{
    private $damage;
    private $magical;
    private $descriptionKey;

    public function __construct($damage, $magical, $descriptionKey)
    {
        $this->damage         = $damage;
        $this->magical        = $magical;
        $this->descriptionKey = $descriptionKey;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->magical;
    }

    public function isPhysical()
    {
        return !$this->magical;
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return Translator::get($this->descriptionKey, [
            'unit'     => $attacker->getName(),
            'opponent' => $opponent->getName(),
        ]);
    }
}
