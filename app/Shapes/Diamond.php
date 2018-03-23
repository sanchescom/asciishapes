<?php

namespace AsciiShapes\Shapes;

class Diamond extends Shape
{
    public function small(): array
    {
        return $this->construct(5, 0);
    }


    public function medium(): array
    {
        return $this->construct(7, 2);
    }


    public function large(): array
    {
        return $this->construct(11, 4);
    }


    public function construct($lines, $step)
    {
        $stack  = [];
        $length = $lines + $step;
        $middle = round($lines / 2);

        $prefix  = "  ";
        $postfix = "  ";

        for ($i=1; $i<=$middle; $i++)
        {
            if ($i == 2)
            {
                $prefix .= " ";
            }

            $string = $prefix;

            for ($j=0; $j<$length; $j++)
            {
                $char = "";

                if ($i == 1)
                {
                    if ($j == 0)
                    {
                        $char .= "+";
                    }
                }

                $char .= ($i == $middle ? "+" : "X");

                if ($i == 1)
                {
                    if ($j == $length - 1)
                    {
                        $char .= "+";
                    }
                }

                $string .= $char;
            }

            if ($i == 2)
            {
                $postfix.= " ";
            }

            $string .= $postfix;

            if ($i != ($middle - 1))
            {
                $length -= 4;

                if ($length < 0)
                {
                    $length = 1;

                    $prefix .= " ";
                    $postfix.= " ";
                }
                else
                {
                    $prefix .= "  ";
                    $postfix.= "  ";
                }
            }

            $stack[] = $string;
        }
        $middle_row = array_shift($stack);

        return array_merge(
            array_reverse($stack),
            array_merge([
                $middle_row
            ], $stack)
        );
    }
}