<?php

namespace AsciiShapes\Handler;

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
		echo $this->getCliArgs()->getArg('s');
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