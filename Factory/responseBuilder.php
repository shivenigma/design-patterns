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
        switch($this->type)
        {
            case 'json' :
                $builder = new jsonBuilder($data);
                echo $builder->build();
                break;

            case 'html' :
                $builder = new htmlBuilder($data);
                echo $builder->build();
                break;

            case 'xml' :
                $builder = new xmlBuilder($data);
                echo $builder->build();
                break;

            default:
                break;
        };
    }
}