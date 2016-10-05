<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 3:35 PM
 */

namespace innoppl\designPatterns\factory;

/**
 * Class responseFactory
 * @package innoppl\designPatterns\factory
 * A factory which will return correct builder type based on the type
 */
class responseFactory
{
    public static function create($type)
    {
        //Dynamically creating an instance of the builder based on the given type
        $class = $type."Builder";

        //returning the new instance
        return new $class();
    }
}