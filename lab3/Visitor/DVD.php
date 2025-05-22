<?php
// Element concret 2
class DVD implements Element {
    public string $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function accept(Visitor $visitor): void {
        $visitor->visitDVD($this);
    }
}