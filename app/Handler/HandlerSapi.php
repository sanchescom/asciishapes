<?php

namespace AsciiShapes\Handler;

abstract class HandlerSapi implements HandlerInterface
{
	abstract public function call();
}