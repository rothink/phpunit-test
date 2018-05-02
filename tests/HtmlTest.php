<?php

namespace Solid\Html;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $html = new Html();
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Html();
        $img = $html->img('img/photo.png');

        $a = $html->a('https://www.example.com.br', $img);

        $this->assertEquals('<a href="https://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }
}