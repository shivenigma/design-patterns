<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 4:14 PM
 */

namespace innoppl\designPatterns\observer;


class message
{
    public function send($message)
    {
        //save message to db and then notify the user
        $this->sendEmail($message);
        $this->sendSms($message);
        $this->sendPushNotificaiton($message);
    }

    public function sendEmail($message)
    {
        //send email using mandrill
    }

    public function sendSms($message)
    {
        //send SMS using twilio
    }

    public function sendPushNotificaiton($message)
    {
        //send push notification using GCM
    }
}