<?php

namespace Styde\Languages;

use Styde\Lang;

class Spanish implements Lang
{
    protected $messages = [
        'Walk'             => ':name camina hacia $direction',
        'HasLifePoints'    => ':name ahora tiene :hp puntos de vida',
        'BasicBowAttack'   => ':unit dispara una flecha a :opponent',
        'FireBowAttack'    => ':unit dispara una flecha encendida a :opponent',
        'CrossBowAttack'   => ':unit dispara con su ballesta a :opponent',
        'BasicSwordAttack' => ':unit ataca con su espada a :opponent',
        'Die'              => ':name muere',
    ];

    public function getMessages()
    {
        return $this->messages;
    }
}
