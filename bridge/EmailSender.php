<?php
require_once "MessageSender.php";
// Concrete Implementor
class EmailSender implements MessageSender
{
    public function send($message)
    {
        echo "Sending Email: $message\n";
    }
}