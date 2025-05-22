<?php

// Concrete Component
use decorator\Coffee;

class SimpleCoffee implements Coffee {
    public function getCost(): float {
        return 5;
    }

    public function getDescription(): string {
        return "Simple coffee";
    }
}