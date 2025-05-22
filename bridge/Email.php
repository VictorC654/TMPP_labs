<?php
require_once "Message.php";
// RefinedAbstraction
class Email extends Message
{
    public function send($message)
    {
        echo "Email message sent. \n";
        $this->messageSender->send($message);
    }
}