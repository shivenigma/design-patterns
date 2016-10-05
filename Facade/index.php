<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 6:12 PM
 */
/**
 * The task is to get the case of a given string inverted.
 * like Vignesh = vIGNESH.
 * The below code do a lot of things to achieve that
 * we can ease this using a facade.
 *
 */
$string = "Non Jane Regrette Rien";
$arrStr = new \innoppl\designPatterns\facade\arrayString();
$arrRev = new \innoppl\designPatterns\facade\arrayCaseReverse();
$arrayFromString = $arrStr->stringToArray($string);
$inverted = $arrRev->reverseCase($arrayFromString);
$final = $arrStr->arrayToString($inverted);