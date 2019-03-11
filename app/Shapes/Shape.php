<?php

namespace AsciiShapes\Shapes;

/**
 * Class Shape
 * @package AsciiShapes\Shapes
 */
abstract class Shape
{
    /**
     * @var string
     */
    const SMALL_SIZE_NAME  = 'small';

    /**
     * @var string
     */
    const MEDIUM_SIZE_NAME = 'medium';

    /**
     * @var string
     */
    const LARGE_SIZE_NAME  = 'large';

    /**
     * @var array
     */
    public $shapeParts;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $amount;


    /**
     * Shape constructor.
     * @param $size
     * @param $amount
     */
    public function __construct($size, $amount)
    {
        $this->size = $size;
        $this->amount = $amount;
    }

    /**
     * @param $size
     * @param $amount
     * @return Shape
     */
    public static function create($size, $amount)
    {
        return new static($size, $amount);
    }

    /**
     * @return array
     */
    protected function getSizes(): array
    {
        return [
            self::SMALL_SIZE_NAME  => static::getSmallSize(),
            self::MEDIUM_SIZE_NAME => static::getMediumSize(),
            self::LARGE_SIZE_NAME  => static::getLargeSize(),
        ];
    }

    /**
     * @return int
     */
    protected function getSize(): int
    {
        return self::getSizes()[$this->size];
    }

    /**
     * @return int|null
     */
    protected function getPreviousSize(): ?int
    {
        $key = array_search($this->size, array_keys($this->getSizes()));

        if ($key) {
            return array_values($this->getSizes())[$key - 1];
        }

        return null;
    }

    /**
     * @return int
     */
    abstract protected function getStep();

    /**
     * @return int
     */
    abstract protected function getStartStep();

    /**
     * @return int
     */
    abstract protected function getSmallSize();

    /**
     * @return int
     */
    abstract protected function getMediumSize();

    /**
     * @return int
     */
    abstract protected function getLargeSize();

    /**
     * @return Shape
     */
    abstract public function build();
}
