<?php

namespace AsciiShapes\Handler;

class FpmFcgi extends HandlerSapi implements HandlerInterface
{
	public function call()
	{
		echo 1;
	}
}