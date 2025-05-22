<?php
// Visitor concret
class PrintVisitor implements Visitor {
    public function visitBook(Book $book): void {
        echo "Book title: " . $book->title . "\n";
    }

    public function visitDVD(DVD $dvd): void {
        echo "DVD title: " . $dvd->title . "\n";
    }
}