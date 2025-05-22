<?php
// Observer concret 1
class ObserverA implements Observer {
    public function update(string $message): void {
        echo "Observer A received message: $message\n";
    }
}