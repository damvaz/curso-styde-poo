<?php

namespace Styde;

use Styde\Armors\SilverArmor;
use Styde\Languages\English;
use Styde\Translator;
use Styde\Weapons\BasicSword;
use Styde\Weapons\FireBow;

require '../vendor/autoload.php';

Translator::setLanguage(new English());

Log::setLogger(new HtmlLogger());

// Play the game

$ramm = Unit::createSoldier('Ramm')
    ->setWeapon(new BasicSword())
    ->setArmor(new SilverArmor());

$silence = new Unit('Silence', new FireBow());

$silence->attack($ramm);

$silence->attack($ramm);

$silence->setArmor(new SilverArmor());

$ramm->attack($silence);
