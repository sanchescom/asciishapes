<?php

namespace AsciiShapes\Shapes;

/**
 * Class ShapesProvider
 * @package AsciiShapes\Shapes
 */
class ShapesProvider
{
    /**
     * Shapes handlers
     *
     * @var Shape[]
     */
    protected static $shapes = [
        Diamond::class,
        Triangle::class,
    ];

    /**
     * @param $size
     * @param $amount
     * @return \Generator|Shape[]
     */
    public static function boot($size, $amount)
    {
        foreach (self::$shapes as $shape) {
            yield $shape::create($size, $amount)->build();
        }
    }
}
