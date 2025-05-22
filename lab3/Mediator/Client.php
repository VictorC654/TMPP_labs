<?php
$mediator = new ConcreteMediator();

$c1 = new Component1($mediator);
$c2 = new Component2($mediator);

$mediator->setComponent1($c1);
$mediator->setComponent2($c2);

$c1->doA();
$c2->doC();