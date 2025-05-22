<?php
require_once "Message.php";
// RefinedAbstraction
class Alert extends Message
{
    public function send($message)
    {
        echo "Alert message sent. \n";
        $this->messageSender->send($message);
    }
}