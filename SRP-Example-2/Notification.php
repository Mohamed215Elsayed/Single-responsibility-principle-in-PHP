<?php
class Notification
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function message()
    {
        return $this->message;
    }
}
$notification = new Notification('Hello World from Notification class');
echo $notification->message();