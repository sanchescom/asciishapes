<?php

namespace AsciiShapes\Handler;

use AsciiShapes\Shapes\ShapesProvider;

/**
 * Class FpmFcgi
 *
 * @inheritdoc
 *
 * @package AsciiShapes\Handler
 */
class FpmFcgi extends HandlerSapi
{
	public function apply()
	{
        $request = $this->getRequest();

        $size   = $request->get('size') ?: $this->getDefaultSize();
        $amount = $request->get('amount') ?: $this->getDefaultAmount();

        ShapesProvider::display($size, $amount);
	}
}