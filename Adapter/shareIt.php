<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 05/10/16
 * Time: 4:48 PM
 */

namespace innoppl\designPatterns\adapter;


class shareIt
{
    public function share($message, socialInterface $media)
    {
        $media->connect();
        $media-post($message);
    }
}