<?php

namespace AsciiShapes\Viewer;

use AsciiShapes\Shapes\Shape;

abstract class ContentViewer
{
    /**
     * @return ContentViewer
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @param Shape $shape
     */
    public function draw(Shape $shape)
    {
        foreach ($shape->shapeParts as $item) {
            for ($i=0; $i < $shape->amount; $i++) {
                echo $item;
            }
            echo PHP_EOL;
        }
    }
}
