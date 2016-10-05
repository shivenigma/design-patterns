<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 5:36 PM
 */

$message = new \innoppl\designPatterns\adapter\shareIt();

//see the calling code only needs to pass the right type of class like facebook or twitter it want's to implement

//posting to facebook
$facebook = new \innoppl\designPatterns\adapter\facebook();
$message->share("This is adapter pattern", $facebook);

//posting to twitter
$twitter = new \innoppl\designPatterns\adapter\twitter();
$message->share("This is adapater pattenr to twitter", $twitter);

//I can post to google+, LinkedIn, etc without changing the shareit class, we just need a new implementation.