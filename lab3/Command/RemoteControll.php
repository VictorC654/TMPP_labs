<?php

namespace Command;

// Invoker: controlează și execută comanda
use Command;

class RemoteControl {
    private ?Command $command = null;

    public function setCommand(Command $command): void {
        $this->command = $command;
    }

    public function pressButton(): void {
        if ($this->command) {
            $this->command->execute();
        } else {
            echo "No command set\n";
        }
    }
}
