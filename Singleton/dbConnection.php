<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 2:44 PM
 */

namespace innoppl\designPatterns\singleton;


class dbConnection
{
    /**
     * @var null a variable to hold the current and only instance of the class
     */
    protected static $instance = null;

    /**
     * @return dbConnection
     *
     * this function is the only way for the public / client to access a instance of this class
     *
     * static is used because we can't call new dbConnection on this class
     *
     */
    public static function getInstance()
    {
        if(!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * dbConnection constructor.
     *
     * this is made as protected so public / client can't call new dbConection()
     */
    protected function __construct()
    {
        //connect to mysql using the given credentials
    }

    /**
     * __clone magic method is made private to override the default behaviour when cloning an object, this way this object can't be copied.
     */
    private function __clone()
    {
        //do absolutely nothing
    }
}