<?php
require_once "Email.php";
require_once "EmailSender.php";
require_once "Alert.php";
require_once "AlertSender.php";

$notification = new Email(new EmailSender());
$notification->send("Sending test email.");

$alert = new Alert(new AlertSender());
$alert->send("Disk Space Low");