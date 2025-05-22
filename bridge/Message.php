<?php
// Abstraction
abstract class Message
{
    public MessageSender $messageSender;

    public function __construct(MessageSender $messageSender)
    {
        $this->messageSender = $messageSender;
    }

    abstract public function send($message);
}