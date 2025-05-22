<?php

use composite\Component;

class Leaf implements Component {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function operation(): string {
        return $this->name;
    }
}