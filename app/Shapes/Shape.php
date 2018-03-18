<?php

namespace AsciiShapes\Shapes;

abstract class Shape
{
    abstract public function small();
    abstract public function medium();
    abstract public function large();


    public function build($size, $amount)
    {
        if (method_exists($this, $size))
        {
            foreach ($this->{$size}() as $item)
            {
                for ($i=0; $i<$amount; $i++)
                {
                    echo $item;
                }
                echo PHP_EOL;
            }
        }
    }
}