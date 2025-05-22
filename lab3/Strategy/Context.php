<?php
// Contextul care folosește strategia
class Context {
    private Strategy $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $a, int $b): int {
        return $this->strategy->doOperation($a, $b);
    }
}