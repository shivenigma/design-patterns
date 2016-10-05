<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 6:40 PM
 */

namespace innoppl\designPatterns\facade;


class arrayString
{
    public static function arrayToString($arrayIn)
    {
        $string_out = null;
        foreach ($arrayIn as $oneChar) {
            $string_out .= $oneChar;
        }
        return $string_out;
    }

    public static function stringToArray($stringIn)
    {
        return str_split($stringIn);
    }
}