<?php

use composite\Component;

class Composite implements Component
{
    private string $name;
    private array $children = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(Component $component): void
    {
        $this->children[] = $component;
    }

    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }
        return $this->name . "(" . implode(", ", $results) . ")";
    }
}
