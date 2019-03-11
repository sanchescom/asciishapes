<?php

namespace AsciiShapes\Shapes;

class ShapesProvider
{
    public static function boot() : array
    {
        return [
            Diamond::class,
            Triangle::class,
        ];
    }
}
