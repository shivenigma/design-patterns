<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 6:49 PM
 */

namespace innoppl\designPatterns\facade;


class reverseFacade
{
    public static function getInvertedString($string) {
        $arrStr = new \innoppl\designPatterns\facade\arrayString();
        $arrRev = new \innoppl\designPatterns\facade\arrayCaseReverse();
        $arrayFromString = $arrStr->stringToArray($string);
        $inverted = $arrRev->reverseCase($arrayFromString);
        $final = $arrStr->arrayToString($inverted);
        return $final;
    }
}