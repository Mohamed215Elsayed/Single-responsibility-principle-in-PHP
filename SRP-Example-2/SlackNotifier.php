<?php
require_once 'Notifier.php';
require_once 'Notification.php';
class SlackNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // Slack Logic Here
        echo "Message sent to " . $to. "<br>";
    }
}
$slack = new SlackNotifier(new Notification("Hello World Notification Slack class<br>"));
$slack->send("toemail");
