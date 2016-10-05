<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 5:15 PM
 */

namespace innoppl\designPatterns\adapter;

/**
 * Interface socialInterface
 * @package innoppl\designPatterns\adapter
 * A common interface which defines a general structure of an social class
 *
 * in places which is going to use social network posting they don't know anything about the implementation details of facebook or twitter.
 *
 * They know two methods connect() and post(), the implementing social class will ensure that it won't break the contract and take care of connecting and posting logic
 *
 */
interface socialInterface
{
    public function connect();

    public function post($message);
}