<?php

namespace AsciiShapes\Shapes;

class Triangle extends Shape
{
    /**
     * @var int
     */
    const START_STEP = 2;

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
            $result = $this->getSize() - $previous_size;

            if ($result) {
                return $result * 2;
            }
        }

        return $this->getStartStep();
    }

    /**
     * @return Shape
     */
    public function build()
    {
        $stack  = [];
        $lines  = $this->getSize();
        $length = $lines + $this->getStep();

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

        $this->shapeParts = array_reverse($stack);

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
