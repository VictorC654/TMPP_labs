<?php
// Interfața Observer
interface Observer {
    public function update(string $message): void;
}