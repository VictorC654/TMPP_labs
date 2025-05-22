<?php
// Componenta de bază care comunică prin mediator
class Component {
    protected Mediator $mediator;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }
}