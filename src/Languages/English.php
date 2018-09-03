<?php

namespace Styde\Languages;

use Styde\Lang;

class English implements Lang
{
    protected $messages = [
        'Walk'             => ':name walk to $direction',
        'HasLifePoints'    => ':name now has :hp life points',
        'BasicBowAttack'   => ':unit shoot with a bow to :opponent',
        'FireBowAttack'    => ':unit shoot with a firebow to :opponent',
        'CrossBowAttack'   => ':unit shoot with a crossbow to :opponent',
        'BasicSwordAttack' => ':unit attack with his sword to :opponent',
        'Die'              => ':name dies',
    ];

    public function getMessages()
    {
        return $this->messages;
    }
}
