<?php
require_once 'Notifier.php';
require_once 'Notification.php';
class SMSNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // SMS Logic Here
        echo "Message sent to " . $to. "<br>";
    }
}
$sms = new SMSNotifier(new Notification("Hello World Notification SMS class<br>"));
$sms->send("09123456789"."<br>");
