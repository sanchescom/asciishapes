<?php

namespace AsciiShapes\Viewer;

use AsciiShapes\Shapes\Shape;

class HtmlContent extends ContentViewer
{
    public function draw(Shape $shape)
    {
        echo '<pre>' . parent::draw($shape) . '<pre>';
    }
}
