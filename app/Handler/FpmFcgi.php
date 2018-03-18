<?php

namespace AsciiShapes\Handler;

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

        $this->display($size, $amount);
	}


    public  function display($size, $amount)
    {
        echo "<pre>";
        parent::display($size, $amount);
        echo "</pre>";
    }
}