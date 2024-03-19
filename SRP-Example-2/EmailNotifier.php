<?php
require_once 'Notifier.php';
require_once 'Notification.php';
class EmailNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // Email Logic Here
        echo "Message sent to " . $to. "<br>";
    }
}
$email = new EmailNotifier(new Notification("Hello World Notification Email class<br>"));
$email->send("toemail");