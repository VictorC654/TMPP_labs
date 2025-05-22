<?php
// Observer concret 2
class ObserverB implements Observer {
    public function update(string $message): void {
        echo "Observer B received message: $message\n";
    }
}