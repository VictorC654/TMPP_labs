<?php
// Interfata pentru strategie
interface Strategy {
    public function doOperation(int $a, int $b): int;
}