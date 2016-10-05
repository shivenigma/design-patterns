<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 5:27 PM
 */

namespace innoppl\designPatterns\adapter;

/**
 * Class twitter
 * @package innoppl\designPatterns\adapter
 *
 * An implementation of the social interface for twitter
 *
 */
class twitter implements socialInterface
{
    public $twitter = null;
    public function connect()
    {
        $password = "lll";
        $user = "some user";
        $appId = "app23423234";
        //twitter requires an additional parameter of appId to connect
        $this->twitter = new twitter($password, $user, $appId);
    }

    public function post($message)
    {
        //twitter requires additional parameter to acquire an API key from its service before posting.
        $apiKey = $this->twitter->getKey();
        $post = $this->twitter->post($apiKey, $message);
    }
}