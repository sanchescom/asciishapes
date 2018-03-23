<?php

namespace AsciiShapes\Shapes;

class Diamond extends Shape
{
    public function small(): array
    {
        $lines  = 5;
        $stack  = [];
        $middle = round($lines / 2);

        $middle_length = $lines + 6;
        $center = round($middle_length / 2);

        for ($i=0; $i<$lines; $i++)
        {
            $string = "";

            for ($j=0; $j<=$middle_length; $j++)
            {
                if ($center==$j)
                {
                    $string .= ($i == 0) ? "+" : "X";
                }
                else
                {
                    $string .= " ";
                }
            }

            $stack[] = $string;
        }

//        while (true)
//        {
//            for ($i=0; $i<$lines; $i++)
//            {
//                $stack[$i] = "  ";
//
//
//            }
//        }

        $stack = [
            [00000100000],
            [00000200000],
            [00122222100],
            [00000200000],
            [00000100000],
        ];

        for ($i=0; $i<$lines; $i++)
        {
            $stack[] = "  ";
        }

        //

        return [ //5 X=3
            "     +     ",
            "     X     ",
            "  +XXXXX+  ", //11 X=5
            "     X     ",
            "     +     ",
        ];
    }


    public function medium(): array
    {
        $lines  = 11;
        $stack  = [];
        $length = $lines + 4;
        $middle = round($lines / 2);

        $prefix  = "  ";
        $postfix = "  ";

        for ($i=1; $i<=$middle; $i++)
        {
            $string = $prefix;

            for ($j=0; $j<$length; $j++)
            {
                $char = ($i == $middle ? "+" : "X");

//                if ($i == 1)
//                {
//                    if ($j == 0)
//                    {
//                        $char = "+";
//                    }
//                    elseif ($j == $length - 1)
//                    {
//                        $char = "+";
//                    }
//                }

                $string .= $char;
            }

            $string .= $postfix;

            if ($i != ($middle - 1))
            {
                $length -= 4;
                $prefix .= "  ";
                $postfix.= "  ";
            }

            $stack[] = $string;

            if ($i == $middle && count($stack) != $lines)
            {
                $i = 1;

                $length = $lines + 2;
                $prefix  = "     ";
                $postfix = "     ";

                $stack = array_reverse($stack);
            }
        }

        return $stack;

        return [ //7 X=5
            "       +       ",
            "       X       ",
            "     XXXXX     ",
            "  +XXXXXXXXX+  ", //15 X=9
            "     XXXXX     ",
            "       X       ",
            "       +       ",
        ];
    }

    public function large(): array
    {
        return [ // 11 X=9
            "          +          ",
            "          X          ",
            "         XXX         ",
            "       XXXXXXX       ",
            "     XXXXXXXXXXX     ",
            "  +XXXXXXXXXXXXXXX+  ", //21 X=15
            "     XXXXXXXXXXX     ",
            "       XXXXXXX       ",
            "         XXX         ",
            "          X          ",
            "          +          ",
        ];
    }
}