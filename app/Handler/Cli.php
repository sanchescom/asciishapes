<?php

namespace AsciiShapes\Handler;

use CliArgs\CliArgs;

class Cli extends HandlerSapi
{
	public function call()
	{
		echo $this->building();
	}


	public function building(CliArgs $cli_args)
	{

	}
}