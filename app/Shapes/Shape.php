<?php

namespace AsciiShapes\Shapes;

abstract class Shape
{
    protected $shape_parts;

    const SMALL_SIZE_NAME  = 'small';
    const MEDIUM_SIZE_NAME = 'medium';
    const LARGE_SIZE_NAME  = 'large';

    protected static $start_step;

    protected static $small_size;
    protected static $medium_size;
    protected static $large_size;

    abstract public function build($size);
    abstract protected static function getStep($size);


    public function draw($amount): void
    {
        foreach ($this->shape_parts as $item) {
            for ($i=0; $i<$amount; $i++) {
                echo $item;
            }
            echo PHP_EOL;
        }
    }


    protected static function getSize($name): int
    {
        return self::getSizes()[$name];
    }


    protected static function getPreviousSize($name): ?int
    {
        $key = array_search($name, array_keys(self::getSizes()));

        if ($key) {
            return array_values(self::getSizes())[$key - 1];
        }

        return null;
    }


    protected static function getSizes(): array
    {
        return [
            self::SMALL_SIZE_NAME  => static::$small_size,
            self::MEDIUM_SIZE_NAME => static::$medium_size,
            self::LARGE_SIZE_NAME  => static::$large_size,
        ];
    }
}
