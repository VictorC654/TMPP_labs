<?php
// Strategie concretă 2
class MultiplyStrategy implements Strategy {
    public function doOperation(int $a, int $b): int {
        return $a * $b;
    }
}