<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 6:12 PM
 */

use innoppl\designPatterns\facade\reverseFacade;

$string = "Non Jane Regrette Rien";

$final = reverseFacade::getInvertedString($string);

//so by using a facade we abstracted the complex functionality behind a simple elegant API.