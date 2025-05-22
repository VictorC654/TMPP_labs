<?php
// Element concret 1
class Book implements Element {
    public string $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function accept(Visitor $visitor): void {
        $visitor->visitBook($this);
    }
}