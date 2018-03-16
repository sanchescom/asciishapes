<?php

namespace AsciiShapes\Handler;

class Cli extends HandlerSapi implements HandlerInterface
{
	public function call()
	{
		echo 2;
	}
}