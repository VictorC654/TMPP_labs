<?php

$leaf1 = new Leaf("Leaf1");
$leaf2 = new Leaf("Leaf2");
$composite = new Composite("Composite1");
$composite->add($leaf1);
$composite->add($leaf2);

echo $composite->operation();