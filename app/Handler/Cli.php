<?php

namespace AsciiShapes\Handler;

use AsciiShapes\Shapes\ShapesProvider;
use CliArgs\CliArgs;

/**
 * Class Cli
 *
 * @property CliArgs $cli_args
 *
 * @package AsciiShapes\Handler
 */
class Cli extends HandlerSapi
{
    protected $cli_args;


	public function apply()
    {
        $cli_args = $this->getCliArgs();

        $size = $cli_args->getArg('size') ?: $this->getDefaultSize();
        $amount = $cli_args->getArg('amount') ?: $this->getDefaultAmount();

        ShapesProvider::display($size, $amount);
    }


	public function setCliArgs(CliArgs $cli_args)
    {
        $this->cli_args = $cli_args;

        return $this;
    }


    public function getCliArgs()
    {
        return $this->cli_args;
    }
}