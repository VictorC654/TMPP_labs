<?php
$context = new Context(new AddStrategy());
echo "Add: " . $context->executeStrategy(5, 3) . "\n";  // 8

$context = new Context(new MultiplyStrategy());
echo "Multiply: " . $context->executeStrategy(5, 3) . "\n";  // 15