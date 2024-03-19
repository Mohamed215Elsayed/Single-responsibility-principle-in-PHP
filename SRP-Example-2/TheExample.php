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

    public function sendToEmail($email)
    {
        // Code Here
    }

    public function sendToSMS($mobileNumber)
    {
        // Code Here
    }
}
//modify it to prevent violation of SRP