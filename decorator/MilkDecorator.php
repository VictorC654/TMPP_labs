<?php
// Concrete Decorator 1
class MilkDecorator extends CoffeeDecorator {
    public function getCost(): float {
        return $this->coffee->getCost() + 1.5;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . ", milk";
    }
}