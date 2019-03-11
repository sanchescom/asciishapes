<?php

namespace AsciiShapes\Handler;

/**
 * Class FpmFcgi
 * @inheritdoc
 * @package AsciiShapes\Handler
 */
class FpmFcgi extends ApplicationHandler
{
    /**
     * Init passed setting and calling viewing function
     */
    public function init()
    {
        $size   = $this->request->get(self::SIZE_ARGUMENT) ?: $this->getDefaultSize();
        $amount = $this->request->get(self::AMOUNT_ARGUMENT) ?: $this->getDefaultAmount();

        $this->view($size, $amount);
    }
}
