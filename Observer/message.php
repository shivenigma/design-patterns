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
        $observer = new observable();
        $observer->notify('new-message',$message);
    }
}