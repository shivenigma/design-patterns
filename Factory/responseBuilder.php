<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 3:27 PM
 */

namespace innoppl\designPatterns\factory;


class responseBuilder
{
    private $type = null;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function respond($data)
    {
        //refactored based on the factory we've just written
        $response = responseFactory::create($this->type);

        echo $response->build();

        /**
         * we eliminated the long switch case using a simple factory
         *
         * now even if we have 100 different type of responses we don't have to add new cases here.
         *
         * if we pass the right type the factory will take care of it
         */
    }
}