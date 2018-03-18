<?php

namespace AsciiShapes\Shapes;

class Triangle extends Shape
{
    public function build($size, $amount)
    {
        $step = 2;

        if ($size - ($step * 2) <= 1)
        {
            
        }
        else
        {
            
        }

        for ($i=0; $i<$size; $i++)
        {
            for ($j=0; $j<$size; $j++)
            {

            }

            echo "   +\r\n";
        }

        for ($j=0; $j<$amount; $j++)
        {
            echo "   +\r\n";
            echo "   X\r\n";
            echo "+XXXXX+\r\n";
            echo "   X\r\n";
            echo "   +\r\n";
        }

        echo $size, $amount;
    }
}
