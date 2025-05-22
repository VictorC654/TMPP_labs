<?php
require_once "MessageSender.php";
// Concrete Implementor
class AlertSender implements MessageSender
{
    public function send($message)
    {
        echo "Sending Alert: $message\n";
    }
}