<?php

namespace AsciiShapes\Handler;

use CliArgs\CliArgs;

/**
 * Class Cli
 * @inheritdoc
 * @method static Cli create()
 * @package AsciiShapes\Handler
 */
class Cli extends ApplicationHandler
{
    /**
     * @var CliArgs
     */
    protected $arguments;


    /**
     * Init passed setting and calling viewing function
     */
    public function init(): void
    {
        $size = $this
            ->getArguments()
            ->getArg(self::SIZE_ARGUMENT) ?: $this->getDefaultSize();

        $amount = $this
            ->getArguments()
            ->getArg(self::AMOUNT_ARGUMENT) ?: $this->getDefaultAmount();

        $this->view($size, $amount);
    }

    /**
     * @param CliArgs $arguments
     * @return $this
     */
    public function setArguments(CliArgs $arguments)
    {
        $this->arguments = $arguments;

        return $this;
    }

    /**
     * @return CliArgs
     */
    public function getArguments()
    {
        return $this->arguments;
    }
}
