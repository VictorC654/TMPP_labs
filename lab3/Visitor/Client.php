<?php

$items = [
    new Book("1984"),
    new DVD("Inception"),
    new Book("Brave New World"),
];

$visitor = new PrintVisitor();

foreach ($items as $item) {
    $item->accept($visitor);
}