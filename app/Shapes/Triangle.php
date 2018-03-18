<?php

namespace AsciiShapes\Shapes;

class Triangle extends Shape
{
    public function small()
    {
        return [
            "     +     ",
            "     X     ",
            "    XXX    ",
            "   XXXXX   ",
            "  XXXXXXX  ",
        ];
    }

    public function medium()
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

    public function large()
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
