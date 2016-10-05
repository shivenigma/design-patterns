<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 4:48 PM
 */

namespace innoppl\designPatterns\adapter;


class shareIt
{
    public function share($message)
    {
        $facebook = new Facebook();
        $user = "myusername";
        $password = "*****";
        $facebook->post($user, $password, $message);

        $twitter = new twitter();
        $twitterUser = "myid";
        $twitterPass = "test";
        $twitter->post($message, $twitterUser, $twitterPass);
    }
}