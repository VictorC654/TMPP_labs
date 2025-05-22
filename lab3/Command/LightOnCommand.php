<?php

namespace Command;

// Command concret pentru aprins lumină
use Command;

class LightOnCommand implements Command {
    private Light $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute(): void {
        $this->light->on();
    }
}