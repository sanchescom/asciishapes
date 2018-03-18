<?php

namespace AsciiShapes\Shapes;

class Diamond extends Shape
{
    public function small(): array
    {
        return [
            "     +     ",
            "     X     ",
            "  +XXXXX+  ",
            "     X     ",
            "     +     ",
        ];
    }

    public function medium(): array
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

    public function large(): array
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