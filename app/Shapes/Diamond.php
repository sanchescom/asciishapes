<?php

namespace AsciiShapes\Shapes;

class Diamond extends Shape
{
    public function small()
    {
        return [
            "     +     ",
            "     X     ",
            "  +XXXXX+  ",
            "     X     ",
            "     +     ",
        ];
    }

    public function medium()
    {
        return [
            "       +       ",
            "       X       ",
            "     XXXXX     ",
            "  +XXXXXXXXX+  ",
            "     XXXXX     ",
            "       X       ",
            "       +       ",
        ];
    }

    public function large()
    {
        return [
            "          +          ",
            "          X          ",
            "         XXX         ",
            "       XXXXXXX       ",
            "     XXXXXXXXXXX     ",
            "  +XXXXXXXXXXXXXXX+  ",
            "     XXXXXXXXXXX     ",
            "       XXXXXXX       ",
            "         XXX         ",
            "          X          ",
            "          +          ",
        ];
    }
}