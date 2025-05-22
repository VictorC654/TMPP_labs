<?php
// Mediator concret
class ConcreteMediator implements Mediator {
    private Component1 $component1;
    private Component2 $component2;

    public function setComponent1(Component1 $component1): void {
        $this->component1 = $component1;
    }

    public function setComponent2(Component2 $component2): void {
        $this->component2 = $component2;
    }

    public function notify(object $sender, string $event): void {
        if ($event === "A") {
            echo "Mediator reacts on A and triggers following operations:\n";
            $this->component2->doC();
        } elseif ($event === "B") {
            echo "Mediator reacts on B and triggers following operations:\n";
            $this->component2->doC();
        } elseif ($event === "C") {
            echo "Mediator reacts on C and triggers following operations:\n";
            $this->component1->doB();
        }
    }
}