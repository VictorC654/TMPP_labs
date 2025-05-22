<?php

namespace decorator;

// Component Interface
interface Coffee
{
    public function getCost(): float;
    public function getDescription(): string;
}