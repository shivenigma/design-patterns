<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 2:59 PM
 */

namespace innoppl\designPatterns\singleton;


class userModel
{
    public function save()
    {
        $db1 = dbConnection::getInstance();

        $db2 = dbConnection::getInstance();

        //Both $db1 and $db2 are now same instance which means they're in same mysql connection
    }
}