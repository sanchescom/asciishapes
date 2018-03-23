<?php

namespace AsciiShapes\Shapes;

class Triangle extends Shape
{
    public function small(): array
    {
        return $this->construct(5, 2);
    }


    public function medium(): array
    {
        return $this->construct(7, 4);
    }


    public function large(): array
    {
        return $this->construct(11, 8);
    }


    public function construct($lines, $step)
    {
        $stack  = [];
        $length = $lines + $step;

        $prefix  = "  ";
        $postfix = "  ";

        for ($i=1; $i<=$lines; $i++)
        {
            $string  = $prefix;

            for ($j=0; $j<$length; $j++)
            {
                $string .= ($i == $lines ? "+" : "X");
            }

            $string .= $postfix;

            if ($i != ($lines - 1))
            {
                $length -= 2;
                $prefix .= " ";
                $postfix.= " ";
            }

            $stack[] = $string;
        }

        return array_reverse($stack);
    }
}
