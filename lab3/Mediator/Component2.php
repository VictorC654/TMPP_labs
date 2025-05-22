<?php
// Componenta concretă 2
class Component2 extends Component {
    public function doC(): void {
        echo "Component2: Doing C.\n";
        $this->mediator->notify($this, "C");
    }
}