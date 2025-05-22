<?php
// Subiectul (Observable)
class Subject {
    private array $observers = [];

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void {
        $this->observers = array_filter(
            $this->observers,
            fn($obs) => $obs !== $observer
        );
    }

    public function notify(string $message): void {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    // Metodă care schimbă starea și notifică observatorii
    public function doSomething(): void {
        echo "Subject: Doing something important...\n";
        $this->notify("Something important happened!");
    }
}