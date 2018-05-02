<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Araujo
 * Date: 02/05/18
 * Time: 14:41
 */

namespace Solid\Html;


class Html
{
    public function img($src)
    {
        return '<img src="'.$src.'">';
    }

    public function a($href, $anchor)
    {
        return '<a href="'.$href.'">'.$anchor.'</a>';
    }
}