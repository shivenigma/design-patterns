<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 5:22 PM
 */

namespace innoppl\designPatterns\adapter;

/**
 * Class facebook
 * @package innoppl\designPatterns\adapter
 *
 * Implementation of the social interface to connect with facebook
 */
class facebook implements socialInterface
{
    public $facebook = null;

    public function connect()
    {
        $user = "something";
        $password = "something";
        //facebook requires username as first parameter, password as second
        $this->facebook = new Facebook($user, $password);
    }

    public function post($message)
    {
        //facebook don't require anything other than the messag to post
        $this->facebook->post($message);
    }
}