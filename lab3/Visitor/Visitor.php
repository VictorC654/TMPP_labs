<?php
// Interfața Visitor
interface Visitor {
    public function visitBook(Book $book): void;
    public function visitDVD(DVD $dvd): void;
}