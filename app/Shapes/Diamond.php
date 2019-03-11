<?php

namespace AsciiShapes\Shapes;

/**
 * Class Diamond
 * @inheritdoc
 * @package AsciiShapes\Shapes
 */
class Diamond extends Shape
{
    /**
     * @var int
     */
    const START_STEP = 0;

    /**
     * @var int
     */
    const SMALL_SIZE = 5;

    /**
     * @var int
     */
    const MEDIUM_SIZE = 7;

    /**
     * @var int
     */
    const LARGE_SIZE = 11;


    /**
     * @return int
     */
    protected function getStep(): int
    {
        $previous_size = $this->getPreviousSize();

        if ($previous_size) {
            return $this->getSize() - $previous_size;
        }

        return $this->getStartStep();
    }

    /**
     * @return Shape
     */
    public function build()
    {
        $stack = [];
        $lines = $this->getSize();
        $length = $lines + $this->getStep();
        $middle = round($lines / 2);

        $prefix = "  ";
        $postfix = "  ";

        for ($i = 1; $i <= $middle; $i++) {
            if ($i == 2) {
                $prefix .= " ";
            }

            $string = $prefix;

            for ($j = 0; $j < $length; $j++) {
                $char = "";

                if ($i == 1) {
                    if ($j == 0) {
                        $char .= "+";
                    }
                }

                $char .= ($i == $middle ? "+" : "X");

                if ($i == 1) {
                    if ($j == $length - 1) {
                        $char .= "+";
                    }
                }

                $string .= $char;
            }

            if ($i == 2) {
                $postfix .= " ";
            }

            $string .= $postfix;

            if ($i != ($middle - 1)) {
                $length -= 4;

                if ($length < 0) {
                    $length = 1;

                    $prefix .= " ";
                    $postfix .= " ";
                } else {
                    $prefix .= "  ";
                    $postfix .= "  ";
                }
            }

            $stack[] = $string;
        }
        $middleRow = array_shift($stack);

        $this->shapeParts = array_merge(
            array_reverse($stack),
            array_merge([
                $middleRow,
            ], $stack)
        );

        return $this;
    }

    /**
     * @return int
     */
    protected function getStartStep()
    {
        return self::START_STEP;
    }

    /**
     * @return int
     */
    protected function getSmallSize()
    {
        return self::SMALL_SIZE;
    }

    /**
     * @return int
     */
    protected function getMediumSize()
    {
        return self::MEDIUM_SIZE;
    }

    /**
     * @return int
     */
    protected function getLargeSize()
    {
        return self::LARGE_SIZE;
    }
}
