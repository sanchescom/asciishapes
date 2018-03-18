<?php

namespace AsciiShapes\Shapes;

class ShapesProvider
{
    /**
     * @return Shape[]
     */
    public function boot()
    {
        return [
            Diamond::class,
            Triangle::class,
        ];
    }


    public static function display($size, $amount)
    {
        $instance = new self();

        foreach ($instance->boot() as $shape)
        {
            echo (new $shape)->build($size, $amount);
        }
    }
}