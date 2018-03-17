<?php

namespace AsciiShapes\Shapes;

class ShapesProvider
{
    public function boot()
    {
        return [
            Triangle::class,
            Diamond::class,
        ];
    }


    public static function init()
    {

    }
}