<?php
// Interfața Mediator
interface Mediator {
    public function notify(object $sender, string $event): void;
}