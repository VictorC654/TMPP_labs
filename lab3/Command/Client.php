<?php

use Command\Light;
use Command\LightOffCommand;
use Command\LightOnCommand;
use Command\RemoteControl;

$light = new Light();

$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$remote = new RemoteControl();

// Aprindem lumina
$remote->setCommand($lightOn);
$remote->pressButton();

// Stingem lumina
$remote->setCommand($lightOff);
$remote->pressButton();