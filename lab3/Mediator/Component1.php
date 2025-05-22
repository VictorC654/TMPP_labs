<?php
// Componenta concretă 1
class Component1 extends Component {
    public function doA(): void {
        echo "Component1: Doing A.\n";
        $this->mediator->notify($this, "A");
    }

    public function doB(): void {
        echo "Component1: Doing B.\n";
        $this->mediator->notify($this, "B");
    }
}