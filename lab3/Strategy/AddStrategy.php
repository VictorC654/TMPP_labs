<?php
// Strategie concreta 1
class AddStrategy implements Strategy {
    public function doOperation(int $a, int $b): int {
        return $a + $b;
    }
}