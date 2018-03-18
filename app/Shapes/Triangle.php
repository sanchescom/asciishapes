<?php

namespace AsciiShapes\Shapes;

class Triangle extends Shape
{
    public function small(): array
    {
        return [
            "     +     ",
            "     X     ",
            "    XXX    ",
            "   XXXXX   ",
            "  XXXXXXX  ",
        ];
    }

    public function medium(): array
    {
        return [
            "       +       ",
            "       X       ",
            "      XXX      ",
            "     XXXXX     ",
            "    XXXXXXX    ",
            "   XXXXXXXXX   ",
            "  XXXXXXXXXXX  ",
        ];
    }

    public function large(): array
    {
        return [
            "          +          ",
            "          X          ",
            "         XXX         ",
            "        XXXXX        ",
            "       XXXXXXX       ",
            "      XXXXXXXXX      ",
            "     XXXXXXXXXXX     ",
            "    XXXXXXXXXXXXX    ",
            "   XXXXXXXXXXXXXXX   ",
            "  XXXXXXXXXXXXXXXXX  ",
            " XXXXXXXXXXXXXXXXXXX ",
        ];
    }
}
