<?php

namespace Command;

// Command concret pentru stins lumină
class LightOffCommand implements Command, \Command
{
    private Light $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute(): void {
        $this->light->off();
    }
}