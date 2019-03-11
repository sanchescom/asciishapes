<?php

namespace AsciiShapes\Shapes;

class Triangle extends Shape
{
    protected static $start_step  = 2;

    protected static $small_size  = 5;
    protected static $medium_size = 7;
    protected static $large_size  = 11;


    protected static function getStep($name): int
    {
        $previous_size = self::getPreviousSize($name);

        if ($previous_size) {
            $result = self::getSize($name) - $previous_size;

            if ($result) {
                return $result * 2;
            }
        }

        return static::$start_step;
    }


    public function build($size): void
    {
        $stack  = [];
        $lines  = self::getSize($size);
        $length = $lines + self::getStep($size);

        $prefix  = "  ";
        $postfix = "  ";

        for ($i = 1; $i <= $lines; $i++) {
            $string = $prefix;

            for ($j = 0; $j < $length; $j++) {
                $string .= ($i == $lines ? "+" : "X");
            }

            $string .= $postfix;

            if ($i != ($lines - 1)) {
                $length -= 2;
                $prefix .= " ";
                $postfix .= " ";
            }

            $stack[] = $string;
        }

        $this->shape_parts = array_reverse($stack);
    }
}
