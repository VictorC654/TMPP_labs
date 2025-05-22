<?php
$subject = new Subject();

$observer1 = new ObserverA();
$observer2 = new ObserverB();

$subject->attach($observer1);
$subject->attach($observer2);

$subject->doSomething();